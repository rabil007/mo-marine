<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\FaqModel;
use App\Models\PublicationModel;
use App\Models\SettingsModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $pubModel     = new PublicationModel();
        $faqModel     = new FaqModel();
        $contactModel = new ContactModel();
        $db           = \Config\Database::connect();

        $pubAll    = $pubModel->findAll();
        $pubActive = array_filter($pubAll, fn($p) => $p['is_active']);
        $totalSize = array_sum(array_column($pubAll, 'file_size'));

        $faqAll       = $faqModel->findAll();
        $faqActive    = array_filter($faqAll, fn($f) => $f['is_active']);
        $faqCats      = count(array_unique(array_column($faqAll, 'category')));

        $contactNew     = $contactModel->countByStatus('new');
        $contactRead    = $contactModel->countByStatus('read');
        $contactReplied = $contactModel->countByStatus('replied');
        $contactTotal   = $contactNew + $contactRead + $contactReplied;

        $contactCritical = $db->table('contact_submissions')
            ->where('urgency', 'critical')->countAllResults();

        $recentContacts = $db->table('contact_submissions')
            ->orderBy('created_at', 'DESC')
            ->limit(6)
            ->get()->getResultArray();

        $serviceRows = $db->table('contact_submissions')
            ->select('service_required, COUNT(*) as cnt')
            ->groupBy('service_required')
            ->orderBy('cnt', 'DESC')
            ->limit(5)
            ->get()->getResultArray();

        $portRows = $db->table('contact_submissions')
            ->select('port_of_call, COUNT(*) as cnt')
            ->groupBy('port_of_call')
            ->orderBy('cnt', 'DESC')
            ->get()->getResultArray();

        $days = [];
        for ($i = 6; $i >= 0; $i--) {
            $days[] = date('Y-m-d', strtotime("-{$i} days"));
        }

        $rawActivity = $db->table('contact_submissions')
            ->select('DATE(created_at) as day, COUNT(*) as cnt')
            ->where('created_at >=', date('Y-m-d', strtotime('-6 days')) . ' 00:00:00')
            ->groupBy('DATE(created_at)')
            ->get()->getResultArray();

        $activityMap = array_column($rawActivity, 'cnt', 'day');
        $activityData = array_map(fn($d) => (int)($activityMap[$d] ?? 0), $days);
        $activityLabels = array_map(fn($d) => date('D', strtotime($d)), $days);

        return view('admin/dashboard', [
            'pageTitle'        => 'Dashboard',

            'pub_count'        => count($pubActive),
            'pub_total'        => count($pubAll),
            'pub_size'         => $totalSize,

            'faq_count'        => count($faqActive),
            'faq_total'        => count($faqAll),
            'faq_categories'   => $faqCats,

            'contact_new'      => $contactNew,
            'contact_read'     => $contactRead,
            'contact_replied'  => $contactReplied,
            'contact_total'    => $contactTotal,
            'contact_critical' => $contactCritical,

            'recent_contacts'  => $recentContacts,
            'service_rows'     => $serviceRows,
            'port_rows'        => $portRows,

            'activity_labels'  => $activityLabels,
            'activity_data'    => $activityData,
        ]);
    }
}
