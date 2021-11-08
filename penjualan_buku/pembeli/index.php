<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<center>
        <a href="http://localhost/kesyza/project/penjualan_buku/pegawai/index.php">Pegawai | </a>
        <!-- <a href="http://localhost/kesyza/project/penjualan_buku/kota/index.php">Kota |</a> -->
        <a href="http://localhost/kesyza/project/penjualan_buku/buku/index.php">Buku |</a>
        <a href="http://localhost/kesyza/project/penjualan_buku/pembeli/index.php">Pembeli |</a>
        <a href="http://localhost/kesyza/project/penjualan_buku/pesanan/index.php">Pesanan |</a>
        <a href="http://localhost/kesyza/project/penjualan_buku/transaksi/index.php">Transaksi </a>
</center>
    <center>Data Pembeli</center>
    <fieldset>
        <legend>Data Pembeli</legend>
        <a href="create.php">Tambah Data Pembeli</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>ID Kota</th>
                <th>Kode Pos</th>
                <th>Telepon</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$pembeli = new Pembeli();
$no = 1;
// var_dump($dosen->index());
foreach ($pembeli->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['pass']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['id_kota']; ?></td>
                    <td><?php echo $data['kode_pos']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>