<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswaList as $mahasiswa) : ?>
            <li><?= $mahasiswa['nama'] ?> - <?= $mahasiswa['nim'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

