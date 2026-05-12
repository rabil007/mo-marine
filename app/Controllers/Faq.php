<?php

namespace App\Controllers;

use App\Models\FaqModel;

class Faq extends BaseController
{
    public function index(): string
    {
        $model = new FaqModel();

        return view('faq', [
            'title'         => 'Maritime FAQ | M&O Marine Service',
            'description'   => 'Read answers about M&O Marine Service, including ship supply, technical repairs, safety inspections, nautical charts, and port operations in Syria.',
            'canonical'     => site_url('faq'),
            'preload_image' => 'assets/images/FAQ.jpg',
            'og_image'      => 'https://mo-marine.com/assets/images/FAQ.jpg',
            'og_image_alt'  => 'Maritime operations scene supporting frequently asked questions for vessel operators',
            'faq_groups'    => $model->getActiveGrouped(),
        ]);
    }
}
