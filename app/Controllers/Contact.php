<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    private const ALLOWED_PORTS = [
        'Lattakia', 'Tartous', 'Other Syrian Port',
    ];

    private const ALLOWED_SERVICES = [
        'Technical Repair / Underwater Services',
        'Emergency Provisions & Stores',
        'Safety Inspection (FFA / LSA)',
        'Customs / Logistics Clearance',
        'Nautical Charts & Publications',
        'Ship Agency Services',
        'General Inquiry',
    ];

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
        $rules = [
            'vessel_name'  => 'permit_empty|max_length[200]',
            'email'        => 'permit_empty|valid_email|max_length[150]',
            'contact_number' => 'permit_empty|max_length[50]',
            'message'      => 'permit_empty|max_length[2000]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/contact#contact-form')
                ->with('contact_error', implode(' ', $this->validator->getErrors()))
                ->withInput();
        }

        $email = trim($this->request->getPost('email') ?? '');
        $phone = trim($this->request->getPost('contact_number') ?? '');

        if (empty($email) && empty($phone)) {
            return redirect()->to('/contact#contact-form')
                ->with('contact_error', 'Please provide at least an email address or contact number.')
                ->withInput();
        }

        $portRaw    = $this->request->getPost('port_of_call');
        $serviceRaw = $this->request->getPost('service_required');

        $port    = in_array($portRaw,    self::ALLOWED_PORTS,    true) ? $portRaw    : self::ALLOWED_PORTS[0];
        $service = in_array($serviceRaw, self::ALLOWED_SERVICES, true) ? $serviceRaw : self::ALLOWED_SERVICES[6];

        $model = new ContactModel();
        $model->insert([
            'vessel_name'      => trim($this->request->getPost('vessel_name') ?? ''),
            'port_of_call'     => $port,
            'service_required' => $service,
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
