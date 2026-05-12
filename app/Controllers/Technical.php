<?php

namespace App\Controllers;

class Technical extends BaseController
{
    public function index(): string
    {
        return view('technical', [
            'title'         => 'Marine Technical & Safety Services | M&O Marine Service',
            'description'   => 'Marine engineering, underwater support and FFA/LSA safety services for vessels at Syrian ports. SOLAS-compliant technical support from M&O Marine Service.',
            'canonical'     => site_url('technical'),
            'preload_image' => 'assets/images/technical_safety_hero.png',
            'og_image'      => 'https://mo-marine.com/assets/images/technical_safety_hero.png',
            'og_image_alt'  => 'Marine engineering team preparing technical and safety support for a vessel',
        ]);
    }
}
