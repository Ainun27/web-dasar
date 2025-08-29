<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']);
        $destination = dirname(__FILE__) . '/gambar/' . $filename;

        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename;
        }
    }

    $sql = 'INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar) ';
    $sql .= "VALUE ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <div class="main">
            <form method="post" action="tambah.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Nama Barang</label></td>
                        <td><input type="text" name="nama" required /></td>
                    </tr>
                    <tr>
                        <td><label>Kategori</label></td>
                        <td>
                            <select name="kategori" required>
                                <option value="Komputer">Komputer</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Hand Phone">Hand Phone</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Harga Jual</label></td>
                        <td><input type="number" name="harga_jual" required /></td>
                    </tr>
                    <tr>
                        <td><label>Harga Beli</label></td>
                        <td><input type="number" name="harga_beli" required /></td>
                    </tr>
                    <tr>
                        <td><label>Stok</label></td>
                        <td><input type="number" name="stok" required /></td>
                    </tr>
                    <tr>
                        <td><label>File Gambar</label></td>
                        <td><input type="file" name="file_gambar" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" name="submit" value="Simpan" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
