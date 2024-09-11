<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan mysqli</title>
</head>
<body>
    <h2>CRUD DATA SISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA SISWA</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from siswa where id_siswa='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <from method="post" action="edit_aksi.php">
            <table>
                <tr>
                    <td>Id Siswa</td>
                    <td>
                        <input type="text" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>
                        <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </from>
        <?php
    }
    ?>
</body>
</html>