<?php

namespace App\Controllers;

use App\Models\KomikModel;
use App\Models\ProjectModel;
use App\Models\UserModel;
use App\Models\AuthModel;

class Admin extends BaseController
{
    protected $session;
    protected $komikModel;
    protected $authModel;
    protected $userModel;
    protected $projectModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->komikModel = new KomikModel();
        $this->projectModel = new ProjectModel();
        $this->userModel = new UserModel();
        $this->authModel = new AuthModel();
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }

    public function index()

    {
        $data = [
            'project' => $this->projectModel->paginate(2, 'project'),
            'pager' => $this->projectModel->pager,
            'user' => $this->userModel->paginate(2, 'user'),
            'pager' => $this->userModel->pager,

        ];
        return view('admin/index', $data);
    }

    public function komik()
    {
        $data = [
            'komik' => $this->komikModel->getKomik()
        ];
        return view('admin/komik/komik_admin', $data);
    }
    public function detail($slug)
    {
        $data = [
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('admin/komik/komik_detail', $data);
    }
    public function project()
    {

        $currentpage = $this->request->getVar('page_project') ? $this->request->getVar('page_project') : 1;

        $data = [
            'project' => $this->projectModel->paginate(3, 'project'),
            'pager' => $this->projectModel->pager,
            'currentpage' => $currentpage,

        ];
        return view('admin/project/project_admin', $data);
    }
    public function detail_project($slug)
    {
        $data = [
            'project' => $this->projectModel->getProject($slug)
        ];
        return view('admin/project/project_detail', $data);
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
        return redirect()->to('admin/project');
    }


    public function user()
    {

        $currentpage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;

        $data = [
            'user' => $this->userModel->paginate(4, 'user'),
            'pager' => $this->userModel->pager,
            'currentpage' => $currentpage
        ];
        return view('admin/user/user_admin', $data);
    }

    public function edit_user($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('admin/user/edit_user_admin', $data);
    }

    public function update_user($id)
    {
        $data = $this->request->getPost();
        $this->userModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('admin/user');
    }

    public function delete_user($id)                                                                    //delete data
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan_delete', 'Data berhasil dihapus.');
        return redirect()->to('admin/user');
    }
}
