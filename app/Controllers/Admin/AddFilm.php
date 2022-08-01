<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AddFilm extends BaseController
{
    public function index()
    {
        echo view('admin/comp/header');
        echo view('admin/comp/navbar');
        echo view('admin/comp/sidebar');
        echo view('admin/addfilm_vw');
        echo view('admin/comp/footer');
    }
}
