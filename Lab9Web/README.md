# Lab9Web
## Ainun Dwi Permana (312310013)

### Tugas mengerjakan latihan pada module dua Pemrograman Web

#### PHP Modular
- Buat file baru dengan nama header.php
```sh
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contoh Modularisasi</title>
<link href="style.css" rel="stylesheet" type="text/stylesheet"
media="screen" />
</head>
<body>
    <div class="container">
        <header>
        <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </div>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab9Web/blob/main/tugas9/1.png?raw=true)

- Buat file baru dengan nama footer.php
```sh
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contoh Modularisasi</title>
<link href="style.css" rel="stylesheet" type="text/stylesheet"
media="screen" />
</head>
<body>
    <div class="container">
        <header>
        <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="kontak.php">Kontak</a>
        </nav>
        <footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab9Web/blob/main/tugas9/2.png?raw=true)

- Buat file baru dengan nama home.php
```sh
<?php require('header.php'); ?>
<div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>
<?php require('footer.php'); ?>
```
![alt text](https://github.com/Ainun27/Lab9Web/blob/main/tugas9/3.png?raw=true)

- Buat file baru dengan nama about.php
```sh
<?php require('header.php'); ?>
<div class="content">
    <h2>Ini Halaman About</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>
<?php require('footer.php'); ?>
```
![alt text](https://github.com/Ainun27/Lab9Web/blob/main/tugas9/4.png?raw=true)

#### Tugas

- Implementasikan konsep modularisasi pada kode program praktikum 8 tentang database, sehingga setiap halamannya memiliki template tampilan yang sama.
```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Home</h1>
        <nav>
            <a href="../lab8_php_database/index.php">Home</a>
            <a href="../lab8_php_database/index.php">About</a>
        </nav>
    </header>
    <main>
    </main>
    <footer>
        <p>&copy; 2024 Home Project</p>
    </footer>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab9Web/blob/main/tugas9/5.png?raw=true)

![alt text](https://github.com/Ainun27/Lab9Web/blob/main/tugas9/6.png?raw=true)


