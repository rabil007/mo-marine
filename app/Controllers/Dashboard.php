<?php

namespace App\Controllers;

use App\Models\FaqModel;
use App\Models\PublicationModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $pubModel = new PublicationModel();
        $faqModel = new FaqModel();

        return view('admin/dashboard', [
            'pageTitle' => 'Dashboard',
            'pub_count' => $pubModel->where('is_active', 1)->countAllResults(),
            'faq_count' => $faqModel->where('is_active', 1)->countAllResults(),
        ]);
    }
}
