<?php

namespace App\Controllers;

use App\Models\PublicationModel;

class Api extends BaseController
{
    public function publications()
    {
        $model        = new PublicationModel();
        $publications = $model->getActive();

        $data = array_map(fn($p) => [
            'id'       => $p['id'],
            'title'    => $p['title'],
            'subtitle' => $p['subtitle'],
            'url'      => base_url($p['file_path']),
        ], $publications);

        return $this->response
            ->setContentType('application/json')
            ->setHeader('Cache-Control', 'public, max-age=300')
            ->setJSON($data);
    }
}
