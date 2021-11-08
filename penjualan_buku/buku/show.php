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
$buku = new Buku();
foreach ($buku->show($_GET['id']) as $data) {
    $id = $data['id'];
    $id_pegawai = $data['id_pegawai'];
    $jenis = $data['judul'];
    $judul = $data['judul'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $genre = $data['genre'];
    $penerbit = $data['penerbit'];
    $penulis = $data['penulis'];
}
?>
    <fieldset>
        <legend>Show Data Buku</legend>
        <table>
            <tr>
                <th>ID Pegawai</th>
                <td><input type="number" name="id_pegawai" value="<?php echo $id_pegawai; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jenis Buku</th>
                <td><input type="text" name="jenis" value="<?php echo $jenis; ?>" readonly></td>
            </tr>
            <tr>
                <th>Judul Buku</th>
                <td><input type="text" name="judul" value="<?php echo $judul; ?>" readonly></td>
            </tr>
            <tr>
                <th>Harga Buku</th>
                <td><input type="number" name="harga" value="<?php echo $harga; ?>" readonly></td>
            </tr>
            <tr>
                <th>Stok Buku</th>
                <td><input type="number" name="stok" value="<?php echo $stok; ?>" readonly></td>
            </tr>
            <tr>
                <th>Genre Buku</th>
                <td><input type="text" name="genre" value="<?php echo $genre; ?>" readonly></td>
            </tr>
            <tr>
                <th>Penerbit Buku</th>
                <td><input type="text" name="penerbit" value="<?php echo $penerbit; ?>" readonly></td>
            </tr>
            <tr>
                <th>Penulis Buku</th>
                <td><input type="text" name="penulis" value="<?php echo $penulis; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>