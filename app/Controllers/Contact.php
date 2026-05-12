<?php

namespace App\Controllers;

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
        ]);
    }
}
