<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>

<body>
    <fieldset>
        <legend>Input Data Transaksi</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>ID Pesanan</th>
                    <td><input type="number" name="id_pesanan" required></td>
                </tr>
                <tr>
                    <th>ID Buku</th>
                    <td><input type="number" name="id_buku" required></td>
                </tr>
                <tr>
                    <th>Jumlah Beli</th>
                    <td><input type="number" name="jumlah" required></td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td><input type="number" name="total" required></td>
                </tr>
                <tr>
                    <th>Diskon</th>
                    <td><input type="number" name="diskon" required></td>
                </tr>
                <tr>
                    <th>Total Bayar</th>
                    <td><input type="number" name="total_bayar" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>