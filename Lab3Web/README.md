# Lab3Web
## Ainun Dwi Permana (312310013)

Tugas mengerjakan latihan pada module dua Pemrograman Web

#### Persiapan membuat dokumen HTML dengan nama file lab3_list.html seperti berikut.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HTML Lanjutan</title>
</head>
<body>
   <header>
     <h1>Membuat List</h1>
   </header>
</body>
</html>
```

1. Membuat Ordered List
- Kemudian tambahkan kode untuk membuat Ordered List seperti berikut.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
    <h1>Membuat List</h1>
    </header>

    <section id="order-list">
        <h2>Ordered List</h2>
        <ol>
        <li>Pemrograman Web</li>
        <li>Sistem Informasi</li>
        <li>Basis Data 2</li>
        </ol>
    </section>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/satu.png?raw=true)

2. Membuat Unorderd List
- Kemudian tambakan kode untuk membuat Unordered List, setelah deklarasi ordered list pada
section unordered-list, seperti berikut.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
    <h1>Membuat List</h1>
    </header>

    <section id="order-list">
        <h2>Ordered List</h2>
        <ol>
        <li>Pemrograman Web</li>
        <li>Sistem Informasi</li>
        <li>Basis Data 2</li>
        </ol>
    </section>

    <section id="unorder-list">
        <h2>Unordered List</h2>
        <ul type="square">
        <li>Jaringan Komputer</li>
        <li>Struktur Data</li>
        <li>Algoritma &amp; Pemrograman</li>
        </ul>
    </section>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/dua.png?raw=true)
   
3. Membuat Description List
- Kemudian tambahkan kode untuk membuat description list setelah deklarasi unorderd-list

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
    <h1>Membuat List</h1>
    </header>

    <section id="order-list">
        <h2>Ordered List</h2>
        <ol>
        <li>Pemrograman Web</li>
        <li>Sistem Informasi</li>
        <li>Basis Data 2</li>
        </ol>
    </section>

    <section id="unorder-list">
        <h2>Unordered List</h2>
        <ul type="square">
        <li>Jaringan Komputer</li>
        <li>Struktur Data</li>
        <li>Algoritma &amp; Pemrograman</li>
        </ul>
    </section>

    <section id="unorder-list">
        <h2>Description List</h2>
        <dl>
        <dt>Fakultas Teknik</dt>
        <dd>Teknik Industri</dd>
        <dd>Teknik Informatika</dd>
        <dd>Teknik Lingkungan</dd>
        <dt>Fakultas Ekonomi dan Bisnis</dt>
        <dd>Akuntansi</dd>
        <dd>Manajemen</dd>
        <dd>Bisnis Digital</dd>
        </dl>
    </section>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/tiga.png?raw=true)


#### Membuat Tabel
- Buat file baru dengan nama lab3_tabel.html seperti berikut.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
       <h1>Membuat Table</h1>
    </header>
</body>
</html>
```
- Kemudian selanjutnya tambahkan kode untuk membuat tabel sederhana seperti berikut :

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
       <h1>Membuat Table</h1>
    </header>

   <table border="1" cellpadding="0" cellspacing="0">
       <thead>
       <tr>
          <th>No.</th>
          <th>Fakultas</th>
          <th>Program Studi</th>
       </tr>
       </thead>
    <tbody>
       <tr>
          <td>1.</td>
          <td>Teknik</td>
          <td>Teknik Informatika</td>
       </tr>
       <tr>
          <td>2.</td>
          <td>Teknik</td>
          <td>Teknik Industri</td>
       </tr>
       <tr>
          <td>3.</td>
          <td>Teknik</td>
          <td>Teknik Lingkungan</td>
       </tr>
    </tbody>
   </table>

</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/empat.png?raw=true)

1. Mengatur Margin dan Padding
- Untuk mengatur margin dan padding pada cel data, tambahkan atribut cellpadding dan cellspacing pada tag table.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
       <h1>Membuat Table</h1>
    </header>

   <table border="1" cellpadding="0" cellspacing="0">
       <thead>
       <tr>
          <th>No.</th>
          <th>Fakultas</th>
          <th>Program Studi</th>
       </tr>
       </thead>
    <tbody>
       <tr>
          <td>1.</td>
          <td>Teknik</td>
          <td>Teknik Informatika</td>
       </tr>
       <tr>
          <td>2.</td>
          <td>Teknik</td>
          <td>Teknik Industri</td>
       </tr>
       <tr>
          <td>3.</td>
          <td>Teknik</td>
          <td>Teknik Lingkungan</td>
       </tr>
    </tbody>
   </table>

</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/lima.png?raw=true)

2. Menggabungkan Sel Data
- Untuk menggabungkan sel data, gunakan atribut rowspan dan colspan. Atribut rowspan untuk menggabungkan baris (secara vertikal) dan colspan untuk menggabungkan kolom (secara horizontal).

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
    
</head>
<body>
    <header>
    <h1>Membuat Table</h1>
    </header>

    <table e border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
            <th>No.</th>
            <th>Fakultas</th>
            <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td rowspan="3">Teknik</td>
                <td>Teknik Informatika</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Teknik Industri</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Teknik Lingkungan</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/enam.png?raw=true)

#### Membuat Form
- Buat file baru dengan nama lab3_form.html seperti berikut.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
       <h1>Membuat Form</h1>
    </header>
</body>
</html>
```

- Kemudian selanjutnya tambahkan kode untuk membuat tabel sederhana seperti berikut :

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>
</head>
<body>
    <header>
    <h1>Membuat Form</h1>
    </header>

    <form action="proses.php" method="post">
        <fieldset>
        <legend>Data Pelanggan</legend>
        <p>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        </p>
        <p>
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" cols="20" rows="3"></textarea>
        </p>
        <p>
        <label>Jenis Kelamin</label>
        <input id="jk_l" type="radio" name="kelamin" value="L" /><label
        for="jk_l">Laki-laki</label>
        <input id="jk_p" type="radio" name="kelamin" value="P" /><label
        for="jk_p">Perempuan</label>
        </p>
        <p><input type="submit" value="Login"></p>
        </fieldset>
    </form>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/tujuh.png?raw=true)

1. Menabahkan Style pada Form
- Agar tampilan form lebih menarik, bisa ditambahkan CSS seperti berikut.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lanjutan</title>

    <style>
        form p > label {
        display: inline-block;
        width: 100px;
        }
        form input[type="text"], form textarea {
        border: 1px solid #197a43;
        }
        form input[type="submit"] {
        border: 1px solid #197a43;
        background-color: #197a43;
        color: #ffffff;
        font-weight: bold;
        padding: 5px 15px;
        }
    </style>
</head>
<body>
    <header>
    <h1>Membuat Form</h1>
    </header>

    <form action="proses.php" method="post">
        <fieldset>
        <legend>Data Pelanggan</legend>
        <p>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        </p>
        <p>
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" cols="20" rows="3"></textarea>
        </p>
        <p>
        <label>Jenis Kelamin</label>
        <input id="jk_l" type="radio" name="kelamin" value="L" /><label
        for="jk_l">Laki-laki</label>
        <input id="jk_p" type="radio" name="kelamin" value="P" /><label
        for="jk_p">Perempuan</label>
        </p>
        <p><input type="submit" value="Login"></p>
        </fieldset>
    </form>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/delapan.png?raw=true)
  
## Pertanyaan Dan Tugas

1. Buatlah form yang menampilkan dropdown menu dan listbox dengan multiple selection.

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Form with Dropdown and Multiple Selection Listbox</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #333;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Latihan menampilkan dropdown menu dan listbox dengan multiple selection</h2>
        <form>
            <div class="form-group">
                <label for="jurusan">Pilih Jurusan :</label>
                <select name="jurusan" id="jurusan">
                    <option value="informatika">Teknik Informatika</option>
                    <option value="industri">Teknik Industri</option>
                    <option value="geologi">Teknik Geologi</option>
                    <option value="kimia">Teknik Kimia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kelas">Pilih Kelas :</label>
                <select name="kelas" id="kelas" multiple size="2">
                    <option value="Reguler">Kelas Pagi</option>
                    <option value="Karyawan">Kelas Karyawan</option>
                    <option value="Weekend">Kelas Weekend</option>
                </select>
            </div>
        </form>
    </div>

</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab3Web/blob/main/tugas3/sembilan.png?raw=true)
