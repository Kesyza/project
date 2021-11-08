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
$pegawai = new Pegawai();
foreach ($pegawai->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $telepon = $data['telepon'];
    $bagian = $data['bagian'];
}
?>
    <fieldset>
        <legend>Show Data Pegawai</legend>
        <table>
            <tr>
                <th>Nama Pegawai</th>
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
                <th>Telepon</th>
                <td><input type="text" name="telepon" value="<?php echo $telepon; ?>" readonly></td>
            </tr>
            <tr>
                <th>Bagian Pekerjaan</th>
                <td><input type="text" name="bagian" value="<?php echo $bagian; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>