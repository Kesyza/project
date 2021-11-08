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
$kota = new Kota();
foreach ($kota->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $ongkir = $data['ongkir'];
}
?>
    <fieldset>
        <legend>Show Data Kota</legend>
        <table>
            <tr>
                <th>Nama Kota</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Ongkos Kirim</th>
                <td><input type="number" name="ongkir" value="<?php echo $ongkir; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>