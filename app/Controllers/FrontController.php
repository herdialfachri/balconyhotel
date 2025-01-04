<?php

namespace App\Controllers;

use App\Models\DataKamarModel;

class FrontController extends BaseController
{
    public function index(): string
    {
        return view('front/index');
    }

    public function room(): string
    {
        $model = new DataKamarModel();
        $data['data_kamar'] = $model->findAll();
        return view('front/rooms', $data);
    }
}
