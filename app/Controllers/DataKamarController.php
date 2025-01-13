<?php

namespace App\Controllers;
use App\Models\DataKamarModel;

class DataKamarController extends BaseController
{
    public function index()
    {
        $model = new DataKamarModel();
        $data['data_kamar'] = $model->findAll();
        return view('back/data_kamar', $data);
    }
}
