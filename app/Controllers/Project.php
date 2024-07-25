<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Project extends BaseController
{
    protected $projectModel;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        helper('session');
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();



        $data = [
            'title' => 'Share Project',
            'project' => $this->projectModel->paginate(7, 'project'),
            'pager' => $this->projectModel->pager

            //'project' => $this->projectModel->findAll()
        ];

        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row);
        // d($row);


        return view('project/index', $data);
    }
    public function detail($slug)                                                                   //detail data
    {
        $data = [
            'title' => 'Detail Project',
            'project' => $this->projectModel->getProject($slug)
        ];

        if (empty($data['project'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul project' . $slug . 'tidak ditemukan');
        }

        return view('project/detail', $data);
    }


    public function your_project()
    {

        $userId = session()->get('user_id');

        $data = [
            'title' => 'Halaman Projectmu',
            'project' => $this->projectModel->getProjectsByUserId($userId),
            'pager' => $this->projectModel->pager
        ];
        return view('user/your_project', $data);
    }

    public function your_detail($slug)                                                                   //detail data
    {
        $data = [
            'title' => 'Detail Project',
            'project' => $this->projectModel->getProject($slug)
        ];

        if (empty($data['project'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul project' . $slug . 'tidak ditemukan');
        }

        return view('user/detail', $data);
    }

    public function create()                                                                       //create data
    {

        $data = [
            'title' => 'Share Project',
            'validation' => \Config\Services::validation()
        ];

        if (session()->get('logged_in')) {
            return view('project/create_project', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {
        if (!$this->validate([
            'penulis' => [
                'label'  => 'Nama',
                'rules'  => 'required|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'max_length' => 'Maximal 20 Character',
                ],
            ],
            'judul' => [
                'label'  => 'Judul',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'max_length' => 'Maximal 20 Character',
                ],
            ],
            'gambar' => [
                'label'  => 'Gambar',
                'rules'  => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar',
                ],
            ],
        ])) {
            return redirect()->to('/create_project')->withInput();
        }

        // Ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = ($fileGambar->getError() == 4) ? 'default.jpeg' : $fileGambar->getRandomName();
        if ($fileGambar->getError() != 4) {
            $fileGambar->move('img', $namaGambar);
        }

        // Ambil data dari checkbox dan gabungkan menjadi satu string jika ada
        $materials = '';
        if ($this->request->getPost('material')) {
            $materials = implode(',', $this->request->getPost('material'));
        }

        $skills = '';
        if ($this->request->getPost('skill')) {
            $skills = implode(',', $this->request->getPost('skill'));
        }

        $statuses = '';
        if ($this->request->getPost('status')) {
            $statuses = implode(',', $this->request->getPost('status'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        // Ambil user_id dari sesi
        $userId = session()->get('user_id');

        // Simpan data ke database
        $this->projectModel->save([
            'judul' => $this->request->getPost('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getPost('penulis'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'material' => $materials,
            'skill' => $skills,
            'status' => $statuses,
            'instagram' => $this->request->getPost('instagram'),
            'tanggalmulai' => $this->request->getPost('mulai_project'),
            'tanggalselesai' => $this->request->getPost('selesai_project'),
            'facebook' => $this->request->getPost('facebook'),
            'pinterest' => $this->request->getPost('pinterest'),
            'tiktok' => $this->request->getPost('tiktok'),
            'gambar' => $namaGambar,
            'user_id' => $userId
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to("/your_project");
    }



    public function delete($id)                                                                    //delete data
    {

        //cari nama gambar dari model berdasarkan id
        $project = $this->projectModel->find($id);

        if ($project['gambar'] != 'default.jpeg') {
            //hapus gambar di folder penyimpanan
            unlink('img/' . $project['gambar']);
        }



        $this->projectModel->delete($id);
        session()->setFlashdata('pesan_delete', 'Data berhasil dihapus.');
        return redirect()->to('/your_project');
    }
    public function edit($slug)                                                                   //edit data
    {

        $data = [
            'title' => 'Form ubah Data Project',
            'validation' => \Config\Services::validation(),
            'project' => $this->projectModel->getProject($slug),
        ];

        return view('project/edit', $data);
    }

    public function update($id)                                                                    //update data
    {

        if (!$this->validate(
            [
                'penulis' => [
                    'label'  => 'Nama',
                    'rules'  => 'required|max_length[50]',
                    'errors' => [
                        'required' => '{field} Harus Diisi',
                        'max_length' => 'Maximal 50 Character',
                    ],
                ],
                'judul' => [
                    'label'  => 'Judul',
                    'rules'  => 'required|max_length[50]',
                    'errors' => [
                        'required' => '{field} Harus Diisi',
                        'max_length' => 'Maximal 50 Character',
                    ],
                ],
                'gambar' => [
                    'label'  => 'Gambar',
                    'rules'  => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in'  => 'Yang anda pilih bikan gambar',
                    ],
                ],

            ]
        )) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/create_project')->withInput()->with('validation', $validation);
            return redirect()->to('/project/edit/' . $this->request->getVar('slug'))->withInput();
        }


        // Ambil data dari checkbox dan gabungkan menjadi satu string jika ada
        $materials = ['material'];
        if (!empty($this->request->getVar('material'))) {
            $materials = implode(',', $this->request->getVar('material'));
        }
        $skills = '';
        if (!empty($this->request->getVar('skill'))) {
            $skills = implode(',', $this->request->getVar('skill'));
        }
        $statuses = '';
        if (!empty($this->request->getVar('status'))) {
            $statuses = implode(',', $this->request->getVar('status'));
        }

        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            //memindahkan gambar ke folder image
            $fileGambar->move('img', $namaGambar);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        // Simpan data ke database
        $this->projectModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'material' => $materials, // Simpan data material
            'skill' => $skills, // Simpan data skill
            'status' => $statuses, // Simpan data status
            'instagram' => $this->request->getVar('instagram'),
            'tanggalmulai' => $this->request->getVar('mulai_project'),
            'tanggalselesai' => $this->request->getVar('selesai_project'),
            'facebook' => $this->request->getVar('facebook'),
            'pinterest' => $this->request->getVar('pinterest'),
            'tiktok' => $this->request->getVar('tiktok'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('your_project/');
    }
}
