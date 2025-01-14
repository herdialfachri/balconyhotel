<?php

namespace App\Controllers;
use App\Models\ReservasiModel;

class ReservasiController extends BaseController
{
    public function index()
    {
        $model = new ReservasiModel();
        $data['data_reservasi'] = $model->paginate(10);
        $data['pager'] = $model->pager;
        return view('back/data_reservasi', $data);
    }
}