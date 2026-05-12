<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FaqModel;

class Faqs extends BaseController
{
    private FaqModel $model;

    public function __construct()
    {
        $this->model = new FaqModel();
    }

    public function index(): string
    {
        $faqs = $this->model->orderBy('sort_order', 'ASC')->orderBy('category', 'ASC')->findAll();

        $grouped = [];
        foreach ($faqs as $faq) {
            $grouped[$faq['category']][] = $faq;
        }

        return view('admin/faqs/index', [
            'pageTitle'   => 'FAQs',
            'breadcrumbs' => [['label' => 'FAQs']],
            'grouped'     => $grouped,
            'total'       => count($faqs),
        ]);
    }

    public function create(): string
    {
        return view('admin/faqs/form', [
            'pageTitle'   => 'Add FAQ',
            'breadcrumbs' => [
                ['label' => 'FAQs', 'url' => site_url('admin/faqs')],
                ['label' => 'Add'],
            ],
            'faq'         => null,
            'categories'  => $this->getCategories(),
            'formError'   => session()->getFlashdata('form_error'),
        ]);
    }

    public function store()
    {
        if (! $this->validate([
            'question'   => 'required|max_length[500]',
            'answer'     => 'required|max_length[5000]',
            'category'   => 'permit_empty|max_length[100]',
            'sort_order' => 'permit_empty|integer',
        ])) {
            return redirect()->to('/admin/faqs/new')
                ->with('form_error', implode(' ', $this->validator->getErrors()));
        }

        $this->model->insert([
            'question'   => trim($this->request->getPost('question')),
            'answer'     => trim($this->request->getPost('answer')),
            'category'   => trim($this->request->getPost('category')) ?: 'General',
            'is_active'  => (int) $this->request->getPost('is_active'),
            'sort_order' => (int) $this->request->getPost('sort_order') ?: 0,
        ]);

        return redirect()->to('/admin/faqs')->with('success', 'FAQ added successfully.');
    }

    public function edit(int $id)
    {
        $faq = $this->model->find($id);

        if (! $faq) {
            return redirect()->to('/admin/faqs')->with('error', 'FAQ not found.');
        }

        return view('admin/faqs/form', [
            'pageTitle'   => 'Edit FAQ',
            'breadcrumbs' => [
                ['label' => 'FAQs', 'url' => site_url('admin/faqs')],
                ['label' => 'Edit'],
            ],
            'faq'         => $faq,
            'categories'  => $this->getCategories(),
            'formError'   => session()->getFlashdata('form_error'),
        ]);
    }

    public function update(int $id)
    {
        if (! $this->model->find($id)) {
            return redirect()->to('/admin/faqs')->with('error', 'FAQ not found.');
        }

        if (! $this->validate([
            'question'   => 'required|max_length[500]',
            'answer'     => 'required|max_length[5000]',
            'category'   => 'permit_empty|max_length[100]',
            'sort_order' => 'permit_empty|integer',
        ])) {
            return redirect()->to("/admin/faqs/{$id}/edit")
                ->with('form_error', implode(' ', $this->validator->getErrors()));
        }

        $this->model->update($id, [
            'question'   => trim($this->request->getPost('question')),
            'answer'     => trim($this->request->getPost('answer')),
            'category'   => trim($this->request->getPost('category')) ?: 'General',
            'is_active'  => (int) $this->request->getPost('is_active'),
            'sort_order' => (int) $this->request->getPost('sort_order') ?: 0,
        ]);

        return redirect()->to('/admin/faqs')->with('success', 'FAQ updated successfully.');
    }

    public function delete(int $id)
    {
        $this->model->delete($id);
        return redirect()->to('/admin/faqs')->with('success', 'FAQ deleted.');
    }

    private function getCategories(): array
    {
        $rows = $this->model->distinct()->select('category')->orderBy('category', 'ASC')->findAll();
        $cats = array_column($rows, 'category');

        $defaults = ['General Operations', 'Supply & Provisions', 'Technical & Safety'];
        return array_values(array_unique(array_merge($defaults, $cats)));
    }
}
