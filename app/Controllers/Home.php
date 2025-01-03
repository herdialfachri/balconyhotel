<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function front(): string
    {
        return view('front/index');
    }

    public function back(): string
    {
        return view('back/index');
    }
}
