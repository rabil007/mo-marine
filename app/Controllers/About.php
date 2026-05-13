<?php

namespace App\Controllers;

use App\Models\StatModel;

class About extends BaseController
{
    public function index(): string
    {
        $statModel = new StatModel();

        return view('about', [
            'title'         => 'About M&O Marine Service | Maritime Company in Syria',
            'description'   => 'Syria\'s premier ship supplier since 2002. M&O Marine Service delivers certified chandlery, technical support and port operations at Lattakia and Tartous.',
            'canonical'     => site_url('about'),
            'preload_image' => 'assets/images/about_us_hero.png',
            'og_image'      => 'https://mo-marine.com/assets/images/about_us_hero.png',
            'og_image_alt'  => 'Bridge crew overseeing commercial vessel navigation and maritime operations',
            'stats'         => $statModel->getActive(),
        ]);
    }
}
