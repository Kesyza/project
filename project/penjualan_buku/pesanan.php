<?php
class Pesanan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapesanan = mysqli_query($this->koneksi, "select * from pesanan");
        // var_dump($datadosen);
        return $datapesanan;
    }

    // Menambah Data
    public function create($kode, $id_pembeli, $tanggal)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pesanan values(null, '$kode', '$id_pembeli', '$tanggal')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datapesanan = mysqli_query(
            $this->koneksi,
            "select * from pesanan where id='$id'"
        );
        return $datapesanan;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datapesanan = mysqli_query(
            $this->koneksi,
            "select * from pesanan where id='$id'"
        );
        return $datapesanan;
    }
    // mengupdate data berdasarkan id
    public function update($id, $kode, $id_pembeli, $tanggal)
    {
        mysqli_query(
            $this->koneksi,
            "update pesanan set kode='$kode', id_pembeli='$id_pembeli', tanggal='$tanggal' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pesanan where id='$id'");
    }
}
?>