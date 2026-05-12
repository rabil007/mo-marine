<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contacts extends BaseController
{
    private ContactModel $model;

    public function __construct()
    {
        $this->model = new ContactModel();
    }

    public function index(): string
    {
        $allowed = ['all', 'new', 'read', 'replied'];
        $filter  = $this->request->getGet('status') ?? 'all';

        if (! in_array($filter, $allowed, true)) {
            $filter = 'all';
        }

        $model = new ContactModel();

        if ($filter !== 'all') {
            $model->where('status', $filter);
        }

        $submissions = $model
            ->orderBy('FIELD(urgency, "critical", "normal")', '', false)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('admin/contacts/index', [
            'pageTitle'     => 'Contact Submissions',
            'breadcrumbs'   => [['label' => 'Contacts']],
            'submissions'   => $submissions,
            'filter'        => $filter,
            'count_new'     => (new ContactModel())->countByStatus('new'),
            'count_read'    => (new ContactModel())->countByStatus('read'),
            'count_replied' => (new ContactModel())->countByStatus('replied'),
        ]);
    }

    public function show(int $id)
    {
        $submission = $this->model->find($id);

        if (! $submission) {
            return redirect()->to('/admin/contacts')->with('error', 'Submission not found.');
        }

        if ($submission['status'] === 'new') {
            $this->model->update($id, ['status' => 'read']);
            $submission['status'] = 'read';
        }

        return view('admin/contacts/show', [
            'pageTitle'   => 'View Submission',
            'breadcrumbs' => [
                ['label' => 'Contacts', 'url' => site_url('admin/contacts')],
                ['label' => '#' . $id],
            ],
            'submission'  => $submission,
        ]);
    }

    public function updateStatus(int $id)
    {
        $status = $this->request->getPost('status');

        if (in_array($status, ['new', 'read', 'replied'])) {
            $this->model->update($id, ['status' => $status]);
        }

        return redirect()->to("/admin/contacts/{$id}")->with('success', 'Status updated.');
    }

    public function delete(int $id)
    {
        $this->model->delete($id);
        return redirect()->to('/admin/contacts')->with('success', 'Submission deleted.');
    }
}
