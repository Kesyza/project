<?php
include '../database.php';
$pegawai = new Pegawai();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $bagian = $_POST['bagian'];

    if ($aksi == "create") {
        $pegawai->create($nama, $jenis_kelamin, $alamat, $telepon, $bagian);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pegawai->update($id, $nama, $jenis_kelamin, $alamat, $telepon, $bagian);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pegawai->delete($id);
        header("location:index.php");
    }

}
?>