<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PublicationModel;

class Publications extends BaseController
{
    private PublicationModel $model;

    public function __construct()
    {
        $this->model = new PublicationModel();
    }

    public function index(): string
    {
        return view('admin/publications/index', [
            'publications' => $this->model->orderBy('sort_order', 'ASC')->orderBy('created_at', 'DESC')->findAll(),
            'success'      => session()->getFlashdata('success'),
            'error'        => session()->getFlashdata('error'),
        ]);
    }

    public function create(): string
    {
        return view('admin/publications/form', [
            'publication' => null,
            'error'       => session()->getFlashdata('error'),
        ]);
    }

    public function store()
    {
        $file = $this->request->getFile('pdf_file');

        if (! $file || ! $file->isValid() || $file->hasMoved()) {
            return redirect()->to('/admin/publications/new')->with('error', 'A valid PDF file is required.');
        }

        if ($file->getClientMimeType() !== 'application/pdf') {
            return redirect()->to('/admin/publications/new')->with('error', 'Only PDF files are allowed.');
        }

        if ($file->getSize() > 20 * 1024 * 1024) {
            return redirect()->to('/admin/publications/new')->with('error', 'File size must be under 20 MB.');
        }

        $newName = $file->getRandomName();
        $file->move(FCPATH . 'uploads/publications', $newName);

        $this->model->insert([
            'title'      => $this->request->getPost('title'),
            'subtitle'   => $this->request->getPost('subtitle') ?: null,
            'file_name'  => $file->getClientName(),
            'file_path'  => 'uploads/publications/' . $newName,
            'file_size'  => $file->getSize(),
            'is_active'  => (int) $this->request->getPost('is_active'),
            'sort_order' => (int) $this->request->getPost('sort_order') ?: 0,
        ]);

        return redirect()->to('/admin/publications')->with('success', 'Publication uploaded successfully.');
    }

    public function edit(int $id): string
    {
        $publication = $this->model->find($id);

        if (! $publication) {
            return redirect()->to('/admin/publications')->with('error', 'Publication not found.');
        }

        return view('admin/publications/form', [
            'publication' => $publication,
            'error'       => session()->getFlashdata('error'),
        ]);
    }

    public function update(int $id)
    {
        $publication = $this->model->find($id);

        if (! $publication) {
            return redirect()->to('/admin/publications')->with('error', 'Publication not found.');
        }

        $data = [
            'title'      => $this->request->getPost('title'),
            'subtitle'   => $this->request->getPost('subtitle') ?: null,
            'is_active'  => (int) $this->request->getPost('is_active'),
            'sort_order' => (int) $this->request->getPost('sort_order') ?: 0,
        ];

        $file = $this->request->getFile('pdf_file');

        if ($file && $file->isValid() && ! $file->hasMoved()) {
            if ($file->getClientMimeType() !== 'application/pdf') {
                return redirect()->to("/admin/publications/{$id}/edit")->with('error', 'Only PDF files are allowed.');
            }

            $oldPath = FCPATH . $publication['file_path'];
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/publications', $newName);

            $data['file_name'] = $file->getClientName();
            $data['file_path'] = 'uploads/publications/' . $newName;
            $data['file_size'] = $file->getSize();
        }

        $this->model->update($id, $data);

        return redirect()->to('/admin/publications')->with('success', 'Publication updated successfully.');
    }

    public function delete(int $id)
    {
        $publication = $this->model->find($id);

        if ($publication) {
            $filePath = FCPATH . $publication['file_path'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $this->model->delete($id);
        }

        return redirect()->to('/admin/publications')->with('success', 'Publication deleted.');
    }
}
