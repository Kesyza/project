<?php
include '../database.php';
$pesanan = new Pesanan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $kode = $_POST['kode'];
    $id_pembeli = $_POST['id_pembeli'];
    $tanggal = $_POST['tanggal'];

    if ($aksi == "create") {
        $pesanan->create($kode, $id_pembeli, $tanggal);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pesanan->update($id, $kode, $id_pembeli, $tanggal);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pesanan->delete($id);
        header("location:index.php");
    }

}
?>