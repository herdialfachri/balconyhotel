<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CountingController extends Controller
{
    public function index()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->get('http://127.0.0.1:5000/get_data');
        $data = json_decode($response->getBody(), true);

        return view('back/index', [
            'total_users' => $data['total_users'] ?? 0,
            'total_rooms' => $data['total_rooms'] ?? 0,
            'total_reservations' => $data['total_reservations'] ?? 0
        ]);
    }
}
