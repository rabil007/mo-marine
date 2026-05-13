<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StatModel;

class Stats extends BaseController
{
    private StatModel $model;

    public function __construct()
    {
        $this->model = new StatModel();
    }

    public function index(): string
    {
        return view('admin/stats/index', [
            'pageTitle'   => 'Stats',
            'breadcrumbs' => [['label' => 'Stats']],
            'stats'       => $this->model->orderBy('sort_order', 'ASC')->findAll(),
        ]);
    }

    public function update()
    {
        $ids    = $this->request->getPost('id')    ?? [];
        $values = $this->request->getPost('value') ?? [];
        $labels = $this->request->getPost('label') ?? [];

        foreach ($ids as $i => $id) {
            $id = (int) $id;
            if (! $id) {
                continue;
            }

            $value = trim($values[$i] ?? '');
            $label = trim($labels[$i] ?? '');

            if ($value === '' || $label === '') {
                continue;
            }

            $this->model->update($id, [
                'value' => $value,
                'label' => $label,
            ]);
        }

        return redirect()->to('/admin/stats')->with('success', 'Stats updated successfully.');
    }
}
