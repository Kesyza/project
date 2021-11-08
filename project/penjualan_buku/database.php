<?php


class Database{
    public $host = "localhost", $user = "root", $pass = "", $db = "penjualan_buku";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi){
            // echo "berhasil";
        }
        else{
            echo "koneksi gagal";
        }
    }
}
// Data Tabel Dosen & Mahasiswa
include 'admin.php';
include 'pegawai.php';
include 'kota.php';
include 'buku.php';
include 'pembeli.php';
include 'pesanan.php';
include 'transaksi.php';

//koneksi DB
$db = new Database();

?>