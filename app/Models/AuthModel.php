<?php

namespace App\Models;

// Mendefinisikan namespace 'App\Models' untuk mengatur struktur dan pengelompokan kode.
use CodeIgniter\Model;

// Mendeklarasikan kelas 'AuthModel' yang merupakan turunan dari kelas 'Model' di CodeIgniter.
class AuthModel extends Model
{
    // Menentukan nama tabel yang akan digunakan oleh model ini di database.
    protected $table = 'user';
    
    // Menentukan primary key dari tabel yang digunakan oleh model ini.
    protected $primaryKey = 'id';
    
    // Menentukan kolom-kolom yang diizinkan untuk diisi atau diubah melalui model ini.
    protected $allowedFields = ['nama', 'username', 'password', 'email', 'status', 'token', 'date_register'];
}
