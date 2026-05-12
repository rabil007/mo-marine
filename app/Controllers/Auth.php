<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('admin_id')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login', [
            'error'   => session()->getFlashdata('error'),
            'success' => session()->getFlashdata('success'),
        ]);
    }

    public function attemptLogin()
    {
        $failKey    = 'login_fails';
        $lockoutKey = 'login_lockout_until';
        $maxFails   = 5;
        $lockoutSec = 60;

        $lockoutUntil = session()->get($lockoutKey);
        if ($lockoutUntil && time() < $lockoutUntil) {
            $remaining = $lockoutUntil - time();
            return redirect()->to('/login')
                ->with('error', "Too many failed attempts. Please wait {$remaining} seconds.")
                ->withInput();
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->to('/login')->with('error', 'Email and password are required.')->withInput();
        }

        $userModel = new UserModel();
        $user      = $userModel->where('email', $email)->first();

        if (! $user || ! password_verify($password, $user['password'])) {
            $fails = (int) session()->get($failKey) + 1;
            session()->set($failKey, $fails);

            if ($fails >= $maxFails) {
                session()->set($lockoutKey, time() + $lockoutSec);
                session()->set($failKey, 0);
                return redirect()->to('/login')
                    ->with('error', "Too many failed attempts. Account locked for {$lockoutSec} seconds.")
                    ->withInput();
            }

            $left = $maxFails - $fails;
            return redirect()->to('/login')
                ->with('error', "Invalid email or password. {$left} attempt(s) remaining.")
                ->withInput();
        }

        session()->set($failKey, 0);
        session()->set($lockoutKey, null);
        session()->regenerate(true);

        session()->set([
            'admin_id'    => $user['id'],
            'admin_name'  => $user['name'],
            'admin_email' => $user['email'],
        ]);

        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }
}
