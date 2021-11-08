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
        <legend>Input Data Pesanan</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Kode Pesanan</th>
                    <td><input type="text" name="kode" required></td>
                </tr>
                <tr>
                    <th>ID Pembeli</th>
                    <td><input type="number" name="id_pembeli" required></td>
                </tr>
                <tr>
                    <th>Tanggal Pesanan</th>
                    <td><input type="number" name="tanggal" required></td>
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