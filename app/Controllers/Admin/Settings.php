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
        $validKeys = array_column(
            $this->model->select('key')->findAll(),
            'key'
        );

        $post = $this->request->getPost();
        $safe = array_intersect_key($post, array_flip($validKeys));

        $this->model->saveSettings($safe);

        return redirect()->to(site_url('admin/settings'))
            ->with('success', 'Settings saved successfully.');
    }
}
