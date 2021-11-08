<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$pesanan = new Pesanan();
foreach ($pesanan->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $kode = $data['kode'];
    $id_pembeli = $data['id_pembeli'];
    $tanggal = $data['tanggal'];
}
?>
    <fieldset>
        <legend>Edit Data Pesanan</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Kode Pesanan</th>
                    <td><input type="text" name="kode" value="<?php echo $kode; ?>" required></td>
                </tr>
                <tr>
                    <th>ID Pembeli</th>
                    <td><input type="number" name="id_pembeli" value="<?php echo $id_pembeli; ?>" required></td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td><input type="number" name="tanggal" value="<?php echo $tanggal; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>