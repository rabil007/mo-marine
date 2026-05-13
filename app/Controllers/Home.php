<?php

namespace App\Controllers;

use App\Models\StatModel;

class Home extends BaseController
{
    public function index(): string
    {
        $statModel = new StatModel();

        return view('index', [
            'title'         => 'Ship Supply & Maritime Services in Syria | M&O Marine Service',
            'description'   => '24/7 ship supply, technical support, port logistics and nautical publications for vessels at Lattakia and Tartous. Certified maritime operations since 2002.',
            'canonical'     => site_url('/'),
            'preload_image' => 'assets/images/hero_bg.png',
            'og_image'      => 'https://mo-marine.com/assets/images/hero_bg.png',
            'og_image_alt'  => 'M&O Marine Service hero background showing maritime port operations',
            'stats'         => $statModel->getActive(),
        ]);
    }
}
