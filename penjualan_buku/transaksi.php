<?php
class Transaksi extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datatransaksi = mysqli_query($this->koneksi, "select * from transaksi");
        // var_dump($datadosen);
        return $datatransaksi;
    }

    // Menambah Data
    public function create($id_pesanan, $id_buku, $jumlah, $total, $diskon, $total_bayar)
    {
        mysqli_query(
            $this->koneksi,
            "insert into transaksi values(null, '$id_pesanan', '$id_buku', '$jumlah', '$total', '$diskon', '$total_bayar')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datatransaksi = mysqli_query(
            $this->koneksi,
            "select * from dosen where id='$id'"
        );
        return $datatransaksi;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datatransaksi = mysqli_query(
            $this->koneksi,
            "select * from transaksi where id='$id'"
        );
        return $datatransaksi;
    }
    // mengupdate data berdasarkan id
    public function update($id, $id_pesanan, $id_buku, $jumlah, $total, $diskon, $total_bayar)
    {
        mysqli_query(
            $this->koneksi,
            "update transaksi set id_pesanan='$id_pesanan', id_buku='$id_buku', jumlah='$jumlah', total='$total', diskon='$diskon', total_bayar='$total_bayar' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from transaksi where id='$id'");
    }
}
?>