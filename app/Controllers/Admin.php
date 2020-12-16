<?php

namespace App\Controllers;

use Config\Validation;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin'
        ];
        return view('admin/index', $data);
    }

    public function listkomik()
    {
        $data = [
            'title' => 'Admin | Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        return view('admin/komik/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin | Form Tambah Data Komik',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/komik/create', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Admin | Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('admin/komik/detail', $data);
    }

    public function save()
    {
        #validasi inputan
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} komik sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'image' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'sinopsis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ]
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/admin/komik/create')->withInput()->with('validation', $validation);
        }

        #membuat slug dari judul
        $slug = url_title($this->request->getVar('judul'), '-', true);

        #menyimpan data di database
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'genre' => $this->request->getVar('genre'),
            'image' => $this->request->getVar('image'),
            'sampul' => $this->request->getVar('sampul'),
            'sinopsis' => $this->request->getVar('sinopsis')
        ]);
        
        #menambahkan Pesan ketika data berhasil ditambahkna
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/admin/komik');
    }

    public function delete($id)
    {
        #Menghapus data di database
        $this->komikModel->delete($id);

        #menambahkan Pesan ketika data berhasil dihapus
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

        return redirect()->to('/admin/komik');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Admin | Form Edit Data Komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('admin/komik/edit', $data);
    }

    public function update($id)
    {
        #cek data komik(judul) untuk validasi
        $dataKomik = $this->komikModel->getKomik($this->request->getVar('slug'));
        
        if ($dataKomik['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        #validasi inputan
        if(!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} komik sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'image' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ],
            'sinopsis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi'
                ]
            ]

        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/admin/komik/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        #membuat slug dari judul
        $slug = url_title($this->request->getVar('judul'), '-', true);

        #menyimpan data di database
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'genre' => $this->request->getVar('genre'),
            'image' => $this->request->getVar('image'),
            'sampul' => $this->request->getVar('sampul'),
            'sinopsis' => $this->request->getVar('sinopsis')
        ]);
        
        #menambahkan Pesan ketika data berhasil ditambahkna
        session()->setFlashdata('pesan', 'Data Berhasil Diedit.');

        return redirect()->to('/admin/komik');
    }
}
