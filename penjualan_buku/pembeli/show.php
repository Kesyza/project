<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$pembeli = new Pembeli();
foreach ($pembeli->show($_GET['id']) as $data) {
    $id = $data['id'];
    $username = $data['username'];
    $pass = $data['pass'];
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $id_kota = $data['id_kota'];
    $kode_pos = $data['kode_pos'];
    $telepon = $data['telepon'];
}
?>
    <fieldset>
        <legend>Show Data Pembeli</legend>
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" value="<?php echo $username; ?>" readonly></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="pass" value="<?php echo $pass; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" readonly></td>
            </tr>
            <tr>
                <th>ID Kota</th>
                <td><input type="number" name="id_kota" value="<?php echo $id_kota; ?>" readonly></td>
            </tr>
            <tr>
                <th>Kode Pos</th>
                <td><input type="number" name="kode_pos" value="<?php echo $kode_pos; ?>" readonly></td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td><input type="text" name="telepon" value="<?php echo $telepon; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>