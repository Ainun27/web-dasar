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
