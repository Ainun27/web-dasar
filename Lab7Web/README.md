# Lab7Web
## Ainun Dwi Permana (312310013)

Tugas mengerjakan latihan pada module dua Pemrograman Web
       
##### Install XAMPP
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/1.png?raw=true)

##### Menjalankan Web Server
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/2.png?raw=true)

##### Memulai PHP
- Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)
- Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/3.png?raw=true)

##### PHP Dasar
- Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut.

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
</html>
```
- Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/4.png?raw=true)

#### Variable PHP
- Menambahkan variable pada program.

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
    
    <h2>Menggunakan Variable</h2>
    <?php
    $nim = "312310013";
    $nama = 'Ainun Dwi Permana';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/5.png?raw=true)

##### Predefine Variable $_GET

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
    <h2>Predefine Variable</h2>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>
```
- Untuk mengaksesnya gunakan URL: http://localhost/lab7_php_dasar/latihan2.php?nama=Ainun
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/6.png?raw=true)

##### Membuat Form Input

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    
    <form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
    </form>

    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/7.png?raw=true)

##### Operator

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h2>Operator</h2>
    
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/8.png?raw=true)

##### Kondisi IF

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi If</title>
</head>
<body>
    <h2>Kondisi If</h2>
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa";
    }
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/9.png?raw=true)

##### Kondisi Switch

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h2>Switch</h2>
<?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";}
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/10.png?raw=true)

##### Perulangan for

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h2>Perulangan For</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
        }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/11.png?raw=true)

##### Perulangan While

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h2>Perulangan While</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/12.png?raw=true)

##### Perulangan Dowhile

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dowhile</title>
</head>
<body>
    <h2>Perulangan Dowhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
        } while ($i<=10);
    ?>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/13.png?raw=true)

##### Tugas 
- Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

```ssh
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

```
![alt text](https://github.com/Ainun27/Lab7Web/blob/main/tugas7/14.png?raw=true)


