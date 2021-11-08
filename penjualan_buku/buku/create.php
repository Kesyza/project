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
        <legend>Input Data Buku</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>ID Pegawai</th>
                    <td><input type="number" name="id_pegawai" required></td>
                </tr>
                <tr>
                    <th>Jenis Buku</th>
                    <td><input type="text" name="jenis" required></td>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <th>Harga Buku</th>
                    <td><input type="number" name="harga" required></td>
                </tr>
                <tr>
                    <th>Stok Buku</th>
                    <td><input type="number" name="stok" required></td>
                </tr>
                <tr>
                    <th>Genre Buku</th>
                    <td><input type="text" name="genre" required></td>
                </tr>
                <tr>
                    <th>Penerbit Buku</th>
                    <td><input type="text" name="penerbit" required></td>
                </tr>
                <tr>
                    <th>Penulis Buku</th>
                    <td><input type="text" name="penulis" required></td>
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