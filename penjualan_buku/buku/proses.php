<?php
include '../database.php';
$buku = new Buku();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $jenis = $_POST['jenis'];
    $judul = $_POST['judul'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $genre = $_POST['genre'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];

    if ($aksi == "create") {
        $buku->create($id_pegawai, $jenis, $judul, $harga, $stok, $genre, $penerbit, $penulis);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $buku->update($id, $id_pegawai, $jenis, $judul, $harga, $stok, $genre, $penerbit, $penulis);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $buku->delete($id);
        header("location:index.php");
    }

}
?>