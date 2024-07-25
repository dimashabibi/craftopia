<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
    protected $useTimestamps = true;
    protected $allowedFields = [

        'user_id', 'judul', 'slug', 'gambar', 'penulis', 'deskripsi', 'material', 'skill', 'status', 'instagram',
        'facebook', 'pinterest', 'tiktok', 'mulai_project', 'selesai_project'
    ];

    public function getProjectsByUserId($userId)
    {
        return $this->where('user_id', $userId)->paginate(8, 'project');
    }

    public function getProject($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
