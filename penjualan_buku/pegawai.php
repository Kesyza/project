<?php
class Pegawai extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapegawai = mysqli_query($this->koneksi, "select * from pegawai");
        // var_dump($datadosen);
        return $datapegawai;
    }

    // Menambah Data
    public function create($nama, $jenis_kelamin, $alamat, $telepon, $bagian)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pegawai values(null, '$nama', '$jenis_kelamin', '$alamat', '$telepon', '$bagian')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datapegawai = mysqli_query(
            $this->koneksi,
            "select * from pegawai where id='$id'"
        );
        return $datapegawai;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datapegawai= mysqli_query(
            $this->koneksi,
            "select * from pegawai where id='$id'"
        );
        return $datapegawai;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $jenis_kelamin, $alamat, $telepon, $bagian)
    {
        mysqli_query(
            $this->koneksi,
            "update pegawai set nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', telepon='$telepon', bagian='$bagian' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pegawai where id='$id'");
    }
}
?>