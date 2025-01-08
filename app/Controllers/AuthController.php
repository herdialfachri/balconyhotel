<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('logged_in')) {
            return $this->redirectUser();
        }
        return view('login/index');
    }

    public function login()
    {
        $session = session();
        $model = new AuthModel();

        $username = $this->request->getVar('nama');
        $password = md5($this->request->getVar('password'));

        $user = $model->where('nama', $username)->first();

        if ($user) {
            // Mengecek password dengan MD5
            if ($password === $user['password']) {
                $sessionData = [
                    'id' => $user['id'],
                    'nama' => $user['nama'],
                    'role' => $user['role'],
                    'logged_in' => true
                ];
                $session->set($sessionData);

                // Debugging: cek apakah data sesi di-set
                var_dump($session->get('logged_in')); // Harusnya true
                return $this->redirectUser();
            } else {
                $session->setFlashdata('msg', 'Wrong Username or Password');
                return redirect()->to('/masuk');
            }
        }
    }

    private function redirectUser()
    {
        $session = session();
        $role = $session->get('role');
    
        if ($role == 1) {
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/');
        }
    }    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/masuk');
    }
}
