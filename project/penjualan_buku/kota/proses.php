<?php
include '../database.php';
$kota = new Kota();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $ongkir = $_POST['ongkir'];

    if ($aksi == "create") {
        $kota->create($nama, $ongkir);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $kota->update($id, $nama, $ongkir);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $kota->delete($id);
        header("location:index.php");
    }

}
?>