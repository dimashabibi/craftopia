<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProjectModel;
use CodeIgniter\Controller;

class User extends baseController
{
    protected $userModel;
    protected $projectModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->projectModel = new ProjectModel();
    }

    public function index()
    {

        $userModel = new UserModel();
        $userId = session()->get('user_id');

        // Ambil data user dari database berdasarkan user_id yang tersimpan di sesi
        $user = $userModel->find($userId);

        $data = [
            'title' => 'Account Page',
            'user' => $user
        ];

        return view('user/profil', $data);
    }

    public function edit_personal($id)
    {

        $data = [
            'title' => 'Edit Personal Detail',
            'user' => $this->userModel->find($id)
        ];

        return view('user/edit_personal', $data);
    }

    public function update_personal($id)
    {
        $data = $this->request->getPost();
        $this->userModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/profil');
    }
}
