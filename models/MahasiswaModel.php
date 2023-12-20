<?php
class MahasiswaModel {
    private $data = [];

    public function __construct() {
        // Inisialisasi data contoh
        $this->data = [
            ['id' => 1, 'nama' => 'Madina Hayva', 'nim' => '12345'],
            ['id' => 2, 'nama' => 'Cintya Della', 'nim' => '67890'],
            // Tambahkan data lain sesuai kebutuhan
        ];
    }

    public function getAllMahasiswa() {
        return $this->data;
    }

    public function getMahasiswaById($id) {
        foreach ($this->data as $mahasiswa) {
            if ($mahasiswa['id'] == $id) {
                return $mahasiswa;
            }
        }
        return null; // Mahasiswa tidak ditemukan
    }
}
