# Lab10Web
## Ainun Dwi Permana (312310013)

### Tugas mengerjakan latihan pada module dua Pemrograman Web

#### PHP OOP
- Buat file baru dengan nama mobil.php

```ssh
<?php
/**
* Program sederhana pendefinisian class dan pemanggilan class.
**/
class Mobil
{
    private $warna;
    private $merk;
    private $harga;
    public function __construct()
{
    $this->warna = "Biru";
    $this->merk = "BMW";
    $this->harga = "10000000";
}
public function gantiWarna ($warnaBaru)
{
    $this->warna = $warnaBaru;
}
public function tampilWarna ()
{
    echo "Warna mobilnya : " . $this->warna;
}
}
// membuat objek mobil
$a = new Mobil();
$b = new Mobil();
// memanggil objek
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");

$a->tampilWarna();
// memanggil objek
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>
```
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/1.png?raw=true)

#### Class Library
- Class library merupakan pustaka kode program yang dapat digunakan bersama pada beberapa file yang berbeda (konsep modularisasi). Class library menyimpan fungsi-fungsi atau class object komponen untuk memudahkan dalam proses development aplikasi.

- Buat file baru dengan nama form.php
```ssh
<?php
/**
* Nama Class: Form
* Deskripsi: CLass untuk membuat form inputan text sederhan
**/
class Form
{
    private $fields = array();
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;
    public function __construct($action, $submit)
{
$this->action = $action;
$this->submit = $submit;
}
public function displayForm()
{
    echo "<form action='".$this->action."' method='POST'>";
    echo '<table width="100%" border="0">';
    for ($j=0; $j<count($this->fields); $j++) {
    echo "<tr><td
    align='right'>".$this->fields[$j]['label']."</td>";
    echo "<td><input type='text'
    name='".$this->fields[$j]['name']."'></td></tr>";
}
echo "<tr><td colspan='2'>";
echo "<input type='submit' value='".$this->submit."'></td></tr>";
echo "</table>";
}
public function addField($name, $label)
{
    $this->fields [$this->jumField]['name'] = $name;
    $this->fields [$this->jumField]['label'] = $label;
    $this->jumField ++;

}
}

?>
```
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/2.png?raw=true)

- File tersebut tidak dapat dieksekusi langsung, karena hanya berisi deklarasi class. Untuk menggunakannya perlu dilakukan include pada file lain yang akan menjalankan dan harus dibuat instance object terlebih dulu.

- Buat file baru dengan nama form_input.php
```ssh
<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
?>
```
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/22.png?raw=true)

- Contoh lainnya untuk database connection dan query. Buat file dengan nama database.php
- sebelum itu, buat terlebih dahulu file config.php (global)

```ssh
<?php
$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db_name' => 'latihan1'
];
?>
```
```ssh
<?php
class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    // Konstruktor untuk membuka koneksi
    public function __construct() {
        $this->getConfig(); // Mengambil konfigurasi dari file config.php
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        
        // Mengecek koneksi
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Mendapatkan konfigurasi database
    private function getConfig() {
        include_once("config.php");
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }

    // Menjalankan query SQL
    public function query($sql) {
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Query Error: " . $this->conn->error);
        }
        return $result;
    }

    // Mendapatkan data dari tabel
    public function get($table, $where = null) {
        $whereClause = $where ? " WHERE " . $where : "";
        $sql = "SELECT * FROM " . $table . $whereClause;
        $result = $this->query($sql);
        return $result->fetch_assoc(); // Mengembalikan satu baris data
    }

    // Menyisipkan data ke tabel
    public function insert($table, $data) {
        if (is_array($data)) {
            $columns = implode(",", array_keys($data));
            $values = implode(",", array_map(function($value) {
                return "'" . $this->conn->real_escape_string($value) . "'"; // Menghindari SQL injection
            }, array_values($data)));
        } else {
            return false;
        }

        $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ")";
        return $this->query($sql);
    }

    // Memperbarui data dalam tabel
    public function update($table, $data, $where) {
        $update_value = "";
        if (is_array($data)) {
            $update_value = implode(",", array_map(function($key, $value) {
                return "$key='" . $this->conn->real_escape_string($value) . "'";
            }, array_keys($data), $data));
        } else {
            return false;
        }

        $sql = "UPDATE " . $table . " SET " . $update_value . " WHERE " . $where;
        return $this->query($sql);
    }

    // Menghapus data dari tabel
    public function delete($table, $filter) {
        if (!str_starts_with(trim($filter), "WHERE")) {
            die("Delete operation must include WHERE clause to avoid accidental deletions.");
        }
        $sql = "DELETE FROM " . $table . " " . $filter;
        return $this->query($sql);
    }
}
?>
```
- outputnya kosong
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/3.png?raw=true)

- kita coba test dengan mengeluarkan output
- buat file test.php
```ssh
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
```
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/33.png?raw=true)

#### Pertanyaan dan Tugas
- Implementasikan konsep modularisasi pada kode program pada praktukum sebelumnya dengan menggunakan class library untuk form dan database connection.

1. membuat file formhandler.php
```ssh
<?php
class FormHandler {
    private $db;

    // Konstruktor untuk membuat objek Database
    public function __construct() {
        $this->db = new Database();
    }

    // Fungsi untuk menyimpan data pengguna
    public function saveUser($name, $email) {
        $data = [
            'name' => $name,
            'email' => $email
        ];
        return $this->db->insert('users', $data); // Menyimpan data ke tabel 'users'
    }

    // Fungsi untuk mengambil data pengguna berdasarkan ID
    public function getUserById($id) {
        return $this->db->get('users', "id = $id"); // Mengambil data berdasarkan ID
    }
}
?>
```

2. membuat file modular.php
```ssh
<?php
include_once "database.php"; // Memasukkan kelas Database
include_once "formhandler.php"; // Memasukkan kelas FormHandler

$formHandler = new formhandler(); // Membuat objek FormHandler

// Menangani pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if ($formHandler->saveUser($name, $email)) {
        echo "User saved successfully!";
    } else {
        echo "Failed to save user.";
    }
}
?>
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
            <a href="tugas.php">Form Input</a>
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

3. membuat file tugas.php (untuk tampilan awal)
```ssh
<?php
include_once "database.php"; // Memasukkan kelas Database
include_once "formhandler.php"; // Memasukkan kelas FormHandler

$formHandler = new formhandler(); // Membuat objek FormHandler

// Menangani pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if ($formHandler->saveUser($name, $email)) {
        echo "User saved successfully!";
    } else {
        echo "Failed to save user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input User</title>
</head>
<body>
    <h1>Input User</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/4.png?raw=true)
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/44.png?raw=true)
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/5.png?raw=true)
![alt text](https://github.com/Ainun27/Lab10Web/blob/main/tugas10/6.png?raw=true)
