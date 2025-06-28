<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';   // nama tabel persis
    protected $primaryKey       = 'id';

    /**
     * Field yang boleh di–insert / update via model.
     * Kolom timestamp tidak perlu dimasukkan; CI4 akan men‑generate sendiri
     * jika $useTimestamps = true.
     */
    protected $allowedFields    = ['username', 'email', 'password', 'role'];

    /**
     * Aktifkan otomatisasi created_at & updated_at.
     * Pastikan nama kolom di tabel adalah `created_at` & `updated_at`
     * atau sesuaikan $createdField dan $updatedField di bawah.
     */
    protected $useTimestamps = true;

    // (opsional) jika di tabel pakai nama lain:
    // protected $createdField  = 'dibuat_pada';
    // protected $updatedField  = 'diubah_pada';
}
