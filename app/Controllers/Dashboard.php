<?php

namespace App\Controllers;

use App\Models\PublicationModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $pubModel = new PublicationModel();

        return view('admin/dashboard', [
            'pageTitle' => 'Dashboard',
            'pub_count' => $pubModel->where('is_active', 1)->countAllResults(),
        ]);
    }
}
