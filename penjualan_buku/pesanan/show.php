<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$pesanan = new Pesanan();
foreach ($pesanan->show($_GET['id']) as $data) {
    $id = $data['id'];
    $kode = $data['kode'];
    $id_pembeli = $data['id_pembeli'];
    $tanggal = $data['tanggal'];
}
?>
    <fieldset>
        <legend>Show Data Pesanan</legend>
        <table>
            <tr>
                <th>Kode Pesanan</th>
                <td><input type="text" name="kode" value="<?php echo $kode; ?>" readonly></td>
            </tr>
            <tr>
                <th>ID Pembeli</th>
                <td><input type="number" name="id_pembeli" value="<?php echo $id_pembeli; ?>" readonly></td>
            </tr>
            <tr>
                <th>Tanggal Beli</th>
                <td><input type="number" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>