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

    public function about_us(): string
    {
        return view('front/about-us');
    }

    public function contact(): string
    {
        return view('front/contact');
    }

    public function booking(): string
    {
        return view('front/booking');
    }
}
