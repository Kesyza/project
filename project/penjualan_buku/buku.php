<?php
class Buku extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $databuku = mysqli_query($this->koneksi, "select * from buku");
        // var_dump($datadosen);
        return $databuku;
    }

    // Menambah Data
    public function create($id_pegawai, $jenis, $judul, $harga, $stok, $genre, $penerbit, $penulis)
    {
        mysqli_query(
            $this->koneksi,
            "insert into buku values(null, '$id_pegawai', '$jenis', '$judul', '$harga', '$stok', '$genre', '$penerbit', '$penulis')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from buku where id='$id'"
        );
        return $databuku;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from dosen where id='$id'"
        );
        return $databuku;
    }
    // mengupdate data berdasarkan id
    public function update($id, $id_pegawai, $jenis, $judul, $harga, $stok, $genre, $penerbit, $penulis)
    {
        mysqli_query(
            $this->koneksi,
            "update buku set id_pegawai='$id_pegawai', jenis='$jenis', judul='$judul', harga='$harga', stok='$stok', genre='$genre', penerbit='$penerbit', penulis='$penulis' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from buku where id='$id'");
    }
}
?>