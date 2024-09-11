<?php//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

//update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', kelas='$kelas', jurusan='$jurusan' where id_siswa='$id_siswa'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>