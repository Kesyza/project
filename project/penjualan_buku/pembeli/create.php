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
        <legend>Input Data Pembeli</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="pass" required></td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="text" name="jenis_kelamin" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <th>ID Kota</th>
                    <td><input type="number" name="id_kota" required></td>
                </tr>
                <tr>
                    <th>Kode Pos</th>
                    <td><input type="number" name="kode_pos" required></td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td><input type="text" name="telepon" required></td>
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