<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('contact', [
            'title'         => 'Contact M&O Marine Service | 24/7 Port Operations',
            'description'   => 'Contact M&O Marine Service for ship supply, technical support and emergency dispatch at Lattakia and Tartous. Reach our 24/7 maritime operations team.',
            'canonical'     => site_url('contact'),
            'preload_image' => 'assets/images/contact_us_hero.png',
            'og_image'      => 'https://mo-marine.com/assets/images/contact_us_hero.png',
            'og_image_alt'  => 'Commercial vessel supported by M&O Marine port operations in Syria',
            'success'       => session()->getFlashdata('contact_success'),
            'error'         => session()->getFlashdata('contact_error'),
        ]);
    }

    public function submit()
    {
        $model = new ContactModel();

        $email = trim($this->request->getPost('email') ?? '');
        $phone = trim($this->request->getPost('contact_number') ?? '');

        if (empty($email) && empty($phone)) {
            return redirect()->to('/contact#contact-form')
                ->with('contact_error', 'Please provide at least an email address or contact number.')
                ->withInput();
        }

        $model->insert([
            'vessel_name'      => trim($this->request->getPost('vessel_name') ?? ''),
            'port_of_call'     => $this->request->getPost('port_of_call'),
            'service_required' => $this->request->getPost('service_required'),
            'contact_number'   => $phone,
            'email'            => $email,
            'message'          => trim($this->request->getPost('message') ?? ''),
            'urgency'          => $this->request->getPost('urgency') === 'critical' ? 'critical' : 'normal',
            'status'           => 'new',
        ]);

        return redirect()->to('/contact#contact-form')
            ->with('contact_success', 'Your request has been received. Our team will respond within the hour.');
    }
}
