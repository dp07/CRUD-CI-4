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

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul' . $slug . 'tidak ditemukan');
        }

        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'tittle' => 'Tambah Data Komik'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
        // cek validasi
        if (!$this->validate([
            'judul' => 'required|is_unique[komik.judul]'
        ]));

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save(
            [
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'penulis' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'sampul' => $this->request->getVar('sampul')
            ]
        );

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        $komik = $this->komik;
        return redirect()->to($komik);
    }
}
