<?php

namespace App\Controllers;

class Logistics extends BaseController
{
    public function index(): string
    {
        return view('logistics', [
            'title'         => 'Maritime Logistics & Port Operations | M&O Marine Service',
            'description'   => 'Maritime logistics, customs clearance, spare parts delivery, warehousing, and port operations support for vessels in Lattakia and Tartous.',
            'canonical'     => site_url('logistics'),
            'preload_image' => 'assets/images/logistics_hero.png',
            'og_image'      => 'https://mo-marine.com/assets/images/logistics_hero.png',
            'og_image_alt'  => 'Port logistics coordination for vessel support and maritime delivery operations',
        ]);
    }
}
