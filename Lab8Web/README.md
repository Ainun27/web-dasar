# Lab8Web
## Ainun Dwi Permana (312310013)

### Tugas mengerjakan latihan pada module dua Pemrograman Web

#### Menjalankan MySQL Server
- Untuk menjalankan MySQL Server dari menu XAMPP Contol.
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/1.png?raw=true)

#### Mengakses MySQL Client menggunakan PHP MyAdmin
- Pastikan webserver Apache dan MySQL server sudah dijalankan. Kemudian buka melalui browser: http://localhost/phpmyadmin/
- Membuat Database
```sh
CREATE DATABASE latihan1;
```

- Membuat Tabel
  
```sh
CREATE TABLE data_barang (
    id_barang INT(10) AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR(30),
    nama VARCHAR(30),
    gambar VARCHAR(100),
    harga_beli DECIMAL(10,2),
    harga_jual DECIMAL(10,2),
    stok INT(4)
);
```

![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/2.png?raw=true)

- Menambahkan Data
  
```sh
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)
VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/3.png?raw=true)

#### Membuat Program CRUD
- Buat folder lab8_php_database pada root directory web server (d:\xampp\htdocs)
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/4.png?raw=true)

- Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:http://localhost/lab8_php_database/
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/5.png?raw=true)

#### Membuat file koneksi database
- Buat file baru dengan nama koneksi.php
  
```sh
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "latihan1";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if ($conn == false)
    {
        echo "Koneksi ke server gagal.";
        die();
    } else echo "Koneksi berhasil";
    ?>
```
- Buka melalui browser untuk menguji koneksi database (untuk menyampilkan pesan koneksi berhasil, uncomment pada perintah echo “koneksi berhasil”;
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/6.png?raw=true)

#### Membuat file index untuk menampilkan data (Read)
- Buat file baru dengan nama index.php

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="tambah_barang.php">Tambah Barang</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sample data, you should replace it with a database query in a real application
            $data_barang = [
                [
                    "id" => 1,
                    "gambar" => "HP Samsung Android",
                    "nama" => "HP Samsung Android",
                    "kategori" => "Elektronik",
                    "harga_jual" => 2000000,
                    "harga_beli" => 2400000,
                    "stok" => 5
                ],
                [
                    "id" => 2,
                    "gambar" => "HP Xiaomi Android",
                    "nama" => "HP Xiaomi Android",
                    "kategori" => "Elektronik",
                    "harga_jual" => 1000000,
                    "harga_beli" => 1400000,
                    "stok" => 5
                ],
                [
                    "id" => 3,
                    "gambar" => "HP OPPO Android",
                    "nama" => "HP OPPO Android",
                    "kategori" => "Elektronik",
                    "harga_jual" => 1800000,
                    "harga_beli" => 2300000,
                    "stok" => 5
                ]
            ];

            foreach ($data_barang as $barang) {
                echo "<tr>
                        <td>{$barang['gambar']}</td>
                        <td>{$barang['nama']}</td>
                        <td>{$barang['kategori']}</td>
                        <td>{$barang['harga_jual']}</td>
                        <td>{$barang['harga_beli']}</td>
                        <td>{$barang['stok']}</td>
                        <td>
                            <a href='ubah.php?id={$barang['id']}'>Ubah</a> | 
                            <a href='hapus.php?id={$barang['id']}'>Hapus</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/7.png?raw=true)

#### Menambah Data (Create)
- Buat file baru dengan nama tambah.php
  
```sh
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
```
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/8.png?raw=true)

#### Mengubah Data (Update)
- Buat file baru dengan nama ubah.php
  
```sh
<?php

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$product = [
    "id" => $id,
    "nama" => "HP Samsung Android",
    "kategori" => "Elektronik",
    "harga_jual" => 2000000,
    "harga_beli" => 2400000,
    "stok" => 5,
    "gambar" => "HP Samsung Android"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
</head>
<body>
    <h1>Ubah Barang</h1>
    <form action="ubah.php?id=<?php echo $product['id']; ?>" method="POST">
        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $product['nama']; ?>" required><br><br>

        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori" value="<?php echo $product['kategori']; ?>" required><br><br>

        <label for="harga_jual">Harga Jual:</label><br>
        <input type="number" id="harga_jual" name="harga_jual" value="<?php echo $product['harga_jual']; ?>" required><br><br>

        <label for="harga_beli">Harga Beli:</label><br>
        <input type="number" id="harga_beli" name="harga_beli" value="<?php echo $product['harga_beli']; ?>" required><br><br>

        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok" value="<?php echo $product['stok']; ?>" required><br><br>

        <label for="gambar">Gambar (URL):</label><br>
        <input type="text" id="gambar" name="gambar" value="<?php echo $product['gambar']; ?>"><br><br>

        <input type="submit" value="Perbarui">
    </form>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/9.png?raw=true)

#### Menghapus Data (Delete)
- Buat file baru dengan nama hapus.php

```sh
<?php
$data_barang = [
    1 => [
        "id" => 1,
        "gambar" => "HP Samsung Android",
        "nama" => "HP Samsung Android",
        "kategori" => "Elektronik",
        "harga_jual" => 2000000,
        "harga_beli" => 2400000,
        "stok" => 5
    ],
    2 => [
        "id" => 2,
        "gambar" => "HP Xiaomi Android",
        "nama" => "HP Xiaomi Android",
        "kategori" => "Elektronik",
        "harga_jual" => 1000000,
        "harga_beli" => 1400000,
        "stok" => 5
    ],
    3 => [
        "id" => 3,
        "gambar" => "HP OPPO Android",
        "nama" => "HP OPPO Android",
        "kategori" => "Elektronik",
        "harga_jual" => 1800000,
        "harga_beli" => 2300000,
        "stok" => 5
    ]
];

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($data_barang[$id])) {

        unset($data_barang[$id]);
        echo "Barang dengan ID {$id} telah dihapus.";
    } else {
        echo "Barang tidak ditemukan.";
    }
} else {
    echo "ID barang tidak ditemukan.";
}
?>

```
![alt text](https://github.com/Ainun27/Lab8Web/blob/main/tugas8/10.png?raw=true)








