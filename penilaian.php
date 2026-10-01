<?php
$nama_siswa = "Bagaskoro";
$kelas = "XII RPL 3";
$nilai_tugas = 80;
$nilai_uts = 80;
$nilai_uas = 95;


$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);


if ($nilai_akhir >= 90 && $nilai_akhir <= 100) {
    $predikat = "A";
} elseif ($nilai_akhir >= 80) {
    $predikat = "B";
} elseif ($nilai_akhir >= 75) {
    $predikat = "C";
} elseif ($nilai_akhir >= 60 ) {
    $predikat = "D";
} else {
    $predikat = "E";
}


if ($nilai_akhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}


echo "<h3>Hasil Penilaian Siswa</h3>";
echo "Nama: " . $nama_siswa . "<br>";
echo "Kelas: " . $kelas . "<br>";



echo "Nilai Tugas: " . $nilai_tugas . "<br>";
echo "Nilai UTS: " . $nilai_uts . "<br>";
echo "Nilai UAS: " . $nilai_uas . "<br>";



echo "Nilai Akhir: " . $nilai_akhir . "<br>";
echo "Predikat: " . $predikat . "<br>";
echo "Status: " . $status . "<br>";
?>