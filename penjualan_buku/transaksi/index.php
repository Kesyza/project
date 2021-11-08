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
    <center>Data Transaksi</center>
    <fieldset>
        <legend>Data Transaksi</legend>
        <a href="create.php">Tambah Data Transaksi</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID Pesanan</th>
                <th>ID Buku</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Diskon</th>
                <th>Total Bayar</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$transaksi = new Transaksi();
$no = 1;
// var_dump($dosen->index());
foreach ($transaksi->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_pesanan']; ?></td>
                    <td><?php echo $data['id_buku']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['total']; ?></td>
                    <td><?php echo $data['diskon']; ?></td>
                    <td><?php echo $data['total_bayar']; ?></td>
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