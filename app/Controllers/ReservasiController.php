<?php

namespace App\Controllers;
use App\Models\ReservasiModel;

class ReservasiController extends BaseController
{
    public function index()
    {
        $model = new ReservasiModel();
        $data['data_reservasi'] = $model->findAll();
        return view('back/data_reservasi', $data);
    }
}
