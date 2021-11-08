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
$transaksi = new Transaksi();
foreach ($transaksi->show($_GET['id']) as $data) {
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
        <legend>Show Data Transaksi</legend>
        <table>
            <tr>
                <th>ID Pesanan</th>
                <td><input type="number" name="id_pesanan" value="<?php echo $id_pesanan; ?>" readonly></td>
            </tr>
            <tr>
                <th>ID Buku</th>
                <td><input type="number" name="id_buku" value="<?php echo $id_buku; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><input type="number" name="jumlah" value="<?php echo $jumlah; ?>" readonly></td>
            </tr>
            <tr>
                <th>Total</th>
                <td><input type="number" name="Total" value="<?php echo $Total; ?>" readonly></td>
            </tr>
            <tr>
                <th>Diskon</th>
                <td><input type="number" name="diskon" value="<?php echo $diskon; ?>" readonly></td>
            </tr>
            <tr>
                <th>Total Bayar</th>
                <td><input type="number" name="total_bayar" value="<?php echo $total_bayar; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>