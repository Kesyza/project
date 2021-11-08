<?php
class Pembeli extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapembeli = mysqli_query($this->koneksi, "select * from pembeli");
        // var_dump($datadosen);
        return $datapembeli;
    }

    // Menambah Data
    public function create($username, $pass, $nama, $jenis_kelamin, $alamat, $id_kota, $kode_pos, $telepon)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pembeli values(null, '$username', '$pass', '$nama', '$jenis_kelamin', '$alamat', '$id_kota', '$kode_pos', '$telepon')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datapembeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $datapembeli;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datapembeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $datapembeli;
    }
    // mengupdate data berdasarkan id
    public function update($id, $username, $pass, $nama, $jenis_kelamin, $alamat, $id_kota, $kode_pos, $telepon)
    {
        mysqli_query(
            $this->koneksi,
            "update pembeli set username='$username', pass='$pass', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_kota='$id_kota', kode_pos='$kode_pos', telepon='$telepon' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pembeli where id='$id'");
    }
}
?>