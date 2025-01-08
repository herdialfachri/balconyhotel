<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class LoginController extends BaseController
{
    public function index(): string
    {
        return view('login/index');
    }
}
?>
