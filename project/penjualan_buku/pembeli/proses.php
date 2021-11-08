<?php
include '../database.php';
$pembeli = new Pembeli();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $id_kota = $_POST['id_kota'];
    $kode_pos = $_POST['kode_pos'];
    $telepon = $_POST['telepon'];

    if ($aksi == "create") {
        $pembeli->create($username, $pass, $nama, $jenis_kelamin, $alamat, $id_kota, $kode_pos, $telepon);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pembeli->update($id, $username, $pass, $nama, $jenis_kelamin, $alamat, $id_kota, $kode_pos, $telepon);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pembeli->delete($id);
        header("location:index.php");
    }

}
?>