<?php

namespace App\Controllers;

use App\Models\ReservasiModel;
use App\Models\DataKamarModel;
use App\Models\AuthModel;

class BookingController extends BaseController
{
    public function save()
    {
        $reservasiModel = new ReservasiModel();
        $dataKamarModel = new DataKamarModel();
        $authModel = new AuthModel();

        // Dapatkan data dari form
        $data = $this->request->getPost();

        // Cari pengguna berdasarkan nama
        $pengguna = $authModel->getUserByUsername(session()->get('nama'));
        if (!$pengguna) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan');
        }

        // Cari data kamar berdasarkan id_kamar
        $kamar = $dataKamarModel->find($data['id_kamar']);
        if (!$kamar) {
            return redirect()->back()->with('error', 'Kamar tidak ditemukan');
        }

        // Persiapkan data untuk disimpan
        $reservasiData = [
            'nama_depan' => $data['nama_depan'],
            'nama_belakang' => $data['nama_belakang'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'harga' => $kamar['harga'],
            'id_kamar' => $kamar['id'],
            'id_pengguna' => $pengguna['id'],
            'tanggal_pesan' => $data['tanggal_pesan'],
            'tanggal_keluar' => $data['tanggal_keluar']
        ];

        // Simpan data ke tabel reservasi
        $reservasiModel->save($reservasiData);

        return redirect()->to('/room')->with('success', 'Booking berhasil disimpan');
    }
}
