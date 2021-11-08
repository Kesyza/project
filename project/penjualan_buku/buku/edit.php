<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$buku = new Buku();
foreach ($buku->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $id_pegawai = $data['id_pegawai'];
    $jenis = $data['jenis'];
    $judul = $data['judul'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $genre = $data['genre'];
    $penerbit = $data['penerbit'];
    $penulis = $data['penulis'];
}
?>
    <fieldset>
        <legend>Edit Data Buku</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>ID Pegawai</th>
                    <td><input type="number" name="id_pegawai" value="<?php echo $id_pegawai; ?>" required></td>
                </tr>
                <tr>
                    <th>Jenis Buku</th>
                    <td><input type="text" name="jenis" value="<?php echo $jenis; ?>" required></td>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <td><input type="text" name="judul" value="<?php echo $judul; ?>" required></td>
                </tr>
                <tr>
                    <th>Harga Buku</th>
                    <td><input type="number" name="harga" value="<?php echo $harga; ?>" required></td>
                </tr>
                <tr>
                    <th>Stok Buku</th>
                    <td><input type="number" name="stok" value="<?php echo $stok; ?>" required></td>
                </tr>
                <tr>
                    <th>Genre Buku</th>
                    <td><input type="text" name="genre" value="<?php echo $genre; ?>" required></td>
                </tr>
                <tr>
                    <th>Penerbit Buku</th>
                    <td><input type="text" name="penerbit" value="<?php echo $penerbit; ?>" required></td>
                </tr>
                <tr>
                    <th>Penulis Buku</th>
                    <td><input type="text" name="penulis" value="<?php echo $penulis; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>