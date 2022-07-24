<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Daftar extends BaseController
{
    public function index()
    {
        echo view('daftar_vw');
    }
}
