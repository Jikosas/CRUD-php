<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('$id_siswa','$nama','$kelas','$jurusan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>