<?php
include '../database.php';
$transaksi = new Transaksi();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $id_pesanan = $_POST['id_pesanan'];
    $id_buku = $_POST['id_buku'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $diskon = $_POST['diskon'];
    $total_bayar = $_POST['total_bayar'];

    if ($aksi == "create") {
        $transaksi->create($id_pesanan, $id_buku, $jumlah, $total, $diskon, $total_bayar);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $transaksi->update($id, $id_pesanan, $id_buku, $jumlah, $total, $diskon, $total_bayar);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $transaksi->delete($id);
        header("location:index.php");
    }

}
?>