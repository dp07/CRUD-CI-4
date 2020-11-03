<?php

namespace App\Controllers;

use \App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            'tittle' => 'Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        // $komikModel = new KomikModel();

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'tittle' => "Detail Komik",
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/detail', $data);
    }
}
