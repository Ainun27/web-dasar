<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>

<h2>Form Input Data</h2>
<form method="POST" action="">
    Nama: <input type="text" name="nama" required><br><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br><br>
    Pekerjaan: 
    <select name="pekerjaan" required>
        <option value="Programmer">Programmer</option>
        <option value="Designer">Designer</option>
        <option value="Manager">Manager</option>
    </select><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $today = new DateTime();
    $birthdate = new DateTime($tanggal_lahir);
    $age = $today->diff($birthdate)->y;

    $gaji = 0;
    switch ($pekerjaan) {
        case 'Programmer':
            $gaji = 10000000; 
            break;
        case 'Designer':
            $gaji = 8000000; 
            break;
        case 'Manager':
            $gaji = 12000000; 
            break;
    }

    echo "<h3>Hasil:</h3>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Tanggal Lahir: " . htmlspecialchars($tanggal_lahir) . "<br>";
    echo "Umur: " . $age . " tahun<br>";
    echo "Pekerjaan: " . htmlspecialchars($pekerjaan) . "<br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
}
?>

</body>
</html>
