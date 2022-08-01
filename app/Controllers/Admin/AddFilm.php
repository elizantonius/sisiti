<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AddFilmM;
use App\Models\Admin\KatFilm;

class AddFilm extends BaseController
{
    public function index()
    {
        $model = new KatFilm();
        $data['list'] = $model->getKat();
        
        echo view('admin/comp/header');
        echo view('admin/comp/navbar');
        echo view('admin/comp/sidebar');
        echo view('admin/addfilm_vw', $data);
        echo view('admin/comp/footer');
    }

}
