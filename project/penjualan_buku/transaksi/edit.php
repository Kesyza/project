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
$transaksi = new Transaksi();
foreach ($transaksi->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $id_pesanan = $data['id_pesanan'];
    $id_buku = $data['id_buku'];
    $jumlah = $data['jumlah'];
    $total = $data['total'];
    $diskon = $data['diskon'];
    $total_bayar = $data['total_bayar'];
}
?>
    <fieldset>
        <legend>Edit Data Transaksi</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>ID Pesanan</th>
                    <td><input type="number" name="id_pesanan" value="<?php echo $id_pesanan; ?>" required></td>
                </tr>
                <tr>
                    <th>ID Buku</th>
                    <td><input type="number" name="id_buku" value="<?php echo $id_buku; ?>" required></td>
                </tr>
                <tr>
                    <th>Jumlah Beli</th>
                    <td><input type="number" name="jumlah" value="<?php echo $jumlah; ?>" required></td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td><input type="number" name="total" value="<?php echo $total; ?>" required></td>
                </tr>
                <tr>
                    <th>Diskon</th>
                    <td><input type="number" name="diskon" value="<?php echo $diskon; ?>" required></td>
                </tr>
                <tr>
                    <th>Total Bayar</th>
                    <td><input type="number" name="total_bayar" value="<?php echo $total_bayar; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>