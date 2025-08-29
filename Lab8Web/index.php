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
