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
