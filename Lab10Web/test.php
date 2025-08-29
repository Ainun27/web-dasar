<?php
include_once 'Database.php'; // Pastikan path ke Database.php benar

// Membuat objek Database
$db = new Database();

// Mengambil data dari tabel 'users'
$result = $db->get('users', 'id = 2'); // Mengambil data dengan id = 1

if ($result) {
    echo "<pre>";
    print_r($result); // Menampilkan hasil query
    echo "</pre>";
} else {
    echo "No data found!";
}
?>
