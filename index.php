<html>
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA SISWA</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH DATA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>OPSI</th>
        </tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from siswa");
while ($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_siswa']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['kelas']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['id_siswa']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id_siswa']; ?>">HAPUS</a>
        </td>
    </tr>
    <?php
}
?>
    </table>
</body>
</html>