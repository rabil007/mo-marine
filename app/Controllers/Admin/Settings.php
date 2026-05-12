<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SettingsModel;

class Settings extends BaseController
{
    private SettingsModel $model;

    public function __construct()
    {
        $this->model = new SettingsModel();
    }

    public function index(): string
    {
        return view('admin/settings/index', [
            'pageTitle'   => 'Site Settings',
            'breadcrumbs' => [['label' => 'Settings']],
            'groups'      => $this->model->getAllGrouped(),
        ]);
    }

    public function update()
    {
        $post = $this->request->getPost();
        unset($post[$this->request->config->CSRFTokenName ?? 'csrf_test_name']);

        $this->model->saveSettings($post);

        return redirect()->to(site_url('admin/settings'))
            ->with('success', 'Settings saved successfully.');
    }
}
