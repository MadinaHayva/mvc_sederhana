<?php
include 'controllers/MahasiswaController.php';
include 'models/MahasiswaModel.php';

$mahasiswaModel = new MahasiswaModel();
$mahasiswaController = new MahasiswaController($mahasiswaModel);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'detail') {
        if (isset($_GET['id'])) {
            $mahasiswaController->detail($_GET['id']);
        } else {
            echo 'Parameter id tidak valid';
        }
    } else {
        echo 'Aksi tidak valid';
    }
} else {
    $mahasiswaController->index();
}

