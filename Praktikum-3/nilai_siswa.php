<?php
    require_once 'libfungsi.php';

    $proses = $_POST['submit'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);


    echo "Proses : $proses";
    echo "<br> Nama : $nama_siswa";
    echo "<br> Mata Kuliah : $mata_kuliah";
    echo "<br> Nilai UTS : $nilai_uts";
    echo "<br> Nilai UAS : $nilai_uas";
    echo "<br> Nilai Tugas / Praktikum : $nilai_tugas";
    echo "<br> Grade : " . grade($total_nilai);
    echo "<br> Predikat : " . predikat(grade($total_nilai));
    echo "<br> Keterangan : " . kelulusan($total_nilai);
