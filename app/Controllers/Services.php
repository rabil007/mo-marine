<?php

namespace App\Controllers;

use App\Models\PublicationModel;
use App\Models\StatModel;

class Services extends BaseController
{
    public function index(): string
    {
        $model     = new PublicationModel();
        $statModel = new StatModel();

        return view('services', [
            'title'         => 'Marine Services & Ship Supply | M&O Marine Service',
            'description'   => 'Ship chandlery, bonded stores, technical repairs, FFA/LSA safety services, port logistics and nautical publications from M&O Marine Service.',
            'canonical'     => site_url('services'),
            'preload_image' => 'assets/images/ship_supply_hero.png',
            'og_image'      => 'https://mo-marine.com/assets/images/ship_supply_hero.png',
            'og_image_alt'  => 'Cargo vessel prepared for ship supply and marine support services at port',
            'publications'  => $model->getActive(),
            'stats'         => $statModel->getActive(),
        ]);
    }
}
