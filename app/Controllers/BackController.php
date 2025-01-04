<?php

namespace App\Controllers;

use App\Models\DataKamarModel;
use CodeIgniter\Controller;

class BackController extends BaseController
{
    public function index(): string
    {
        $model = new DataKamarModel();
        $data['data_kamar'] = $model->findAll();
        return view('back/index', $data);
    }

    public function create()
    {
        return view('data_kamar_create');
    }

    public function store()
    {
        $model = new DataKamarModel();

        $data = [
            'nama_kamar' => $this->request->getPost('nama_kamar'),
            'gambar' => $this->request->getPost('gambar'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'tipe_kasur' => $this->request->getPost('tipe_kasur'),
            'fasilitas' => $this->request->getPost('fasilitas')
        ];

        $model->insert($data);
        return redirect()->to('/backcontroller');
    }

    public function edit($id)
    {
        $model = new DataKamarModel();
        $data['data_kamar'] = $model->find($id);
        return view('data_kamar_edit', $data);
    }

    public function update($id)
    {
        $model = new DataKamarModel();

        $data = [
            'nama_kamar' => $this->request->getPost('nama_kamar'),
            'gambar' => $this->request->getPost('gambar'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'tipe_kasur' => $this->request->getPost('tipe_kasur'),
            'fasilitas' => $this->request->getPost('fasilitas')
        ];

        $model->update($id, $data);
        return redirect()->to('/backcontroller');
    }

    public function delete($id)
    {
        $model = new DataKamarModel();
        $model->delete($id);
        return redirect()->to('/backcontroller');
    }
}
?>
