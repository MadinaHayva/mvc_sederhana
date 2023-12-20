<?php

class MahasiswaController {
    private $mahasiswaModel;

    public function __construct(MahasiswaModel $mahasiswaModel) {
        $this->mahasiswaModel = $mahasiswaModel;
    }

    public function index() {
        $mahasiswaList = $this->mahasiswaModel->getAllMahasiswa();
        include 'views/mahasiswa/index.php';
    }

    public function detail($id) {
        $mahasiswa = $this->mahasiswaModel->getMahasiswaById($id);
        if ($mahasiswa) {
            include 'views/mahasiswa/detail.php';
        } else {
            echo 'Mahasiswa tidak ditemukan';
        }
    }
}

