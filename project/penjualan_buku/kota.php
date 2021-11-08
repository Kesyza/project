<?php
class Kota extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datakota = mysqli_query($this->koneksi, "select * from kota");
        // var_dump($datadosen);
        return $datakota;
    }

    // Menambah Data
    public function create($nama, $ongkir)
    {
        mysqli_query(
            $this->koneksi,
            "insert into kota values(null,'$nama','$ongkir')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datakota = mysqli_query(
            $this->koneksi,
            "select * from kota where id='$id'"
        );
        return $datakota;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datakota = mysqli_query(
            $this->koneksi,
            "select * from kota where id='$id'"
        );
        return $datakota;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $ongkir)
    {
        mysqli_query(
            $this->koneksi,
            "update kota set nama='$nama', ongkir='$ongkir' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from kota where id='$id'");
    }
}
?>