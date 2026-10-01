<?php
$nama_siswa = "Bagas";
$kelas = "XII RPL 3";
$nilai_tugas = 80;
$nilai_uts = 80;
$nilai_uas = 95;


$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);


if ($nilai_akhir >= 90) {
    $predikat = "A";
} elseif ($nilai_akhir >= 80) {
    $predikat = "B";
} elseif ($nilai_akhir >= 75 ) {
    $predikat = "C";
} elseif ($nilai_akhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}


if ($nilai_akhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nama: <?= $nama_siswa?> </p>
</body>
</html>

