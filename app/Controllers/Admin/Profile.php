<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();
        $user  = $model->find(session()->get('admin_id'));

        return view('admin/profile', [
            'pageTitle'   => 'My Profile',
            'breadcrumbs' => [['label' => 'Profile']],
            'user'        => $user,
        ]);
    }

    public function update()
    {
        $model = new UserModel();
        $id    = session()->get('admin_id');

        $name  = trim($this->request->getPost('name'));
        $email = trim($this->request->getPost('email'));

        if (empty($name) || empty($email)) {
            return redirect()->to('/admin/profile')->with('profile_error', 'Name and email are required.');
        }

        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->to('/admin/profile')->with('profile_error', 'Please enter a valid email address.');
        }

        $existing = $model->where('email', $email)->where('id !=', $id)->first();
        if ($existing) {
            return redirect()->to('/admin/profile')->with('profile_error', 'That email is already used by another account.');
        }

        $model->update($id, ['name' => $name, 'email' => $email]);

        session()->set([
            'admin_name'  => $name,
            'admin_email' => $email,
        ]);

        return redirect()->to('/admin/profile')->with('success', 'Profile updated successfully.');
    }

    public function changePassword()
    {
        $model   = new UserModel();
        $id      = session()->get('admin_id');
        $user    = $model->find($id);

        $current  = $this->request->getPost('current_password');
        $new      = $this->request->getPost('new_password');
        $confirm  = $this->request->getPost('confirm_password');

        if (! password_verify($current, $user['password'])) {
            return redirect()->to('/admin/profile')->with('password_error', 'Current password is incorrect.');
        }

        if (strlen($new) < 8) {
            return redirect()->to('/admin/profile')->with('password_error', 'New password must be at least 8 characters.');
        }

        if ($new !== $confirm) {
            return redirect()->to('/admin/profile')->with('password_error', 'New passwords do not match.');
        }

        $model->update($id, ['password' => password_hash($new, PASSWORD_BCRYPT)]);

        return redirect()->to('/admin/profile')->with('success', 'Password changed successfully.');
    }
}
