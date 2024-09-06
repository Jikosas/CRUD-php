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
<h3>TAMBAH DATA</h3>
<form method="post" action="tambah_aksi.php">
    <table>
        <tr>
            <td>ID siswa</td>
            <td><input type="text" name="id_siswa"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="Jurusan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>
</body>
</html>