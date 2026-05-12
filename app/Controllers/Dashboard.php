<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('admin/dashboard', [
            'admin_name' => session()->get('admin_name'),
        ]);
    }
}
