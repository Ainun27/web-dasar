# Lab1Web
## Ainun Dwi Permana (312310013)

Tugas mengerjakan latihan pada module Pemrograman Web

### Langkah Pertama
1. Persiapan membuka VSCode dan Browser
2. Kemudian buat file baru dengan nama lab1_tag_dasar.html dan tambahkan tag dasar dokumen HTML.
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%202024-09-30%20173027.png?raw=true)
3. Kemudian selanjutnya, buka file tersebut pada web browser misalnya Mozilla Firefox
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(324).png?raw=true)
#### Membuat Paragraf

```sh
<p>Kami sedang belajar HTML dasar, pada matakuliah Pemrograman Web di Prodi
Teknik Informatika Universitas Pelita Bangsa. Pelajaran pertama yang kami dapat
adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar
HTML.</p>
<p>Ini merupakan sebuah paragraf yang terdiri dari beberapa kalimat yang saling
mendukung sehingga menjadi satu kesatuan. Paragraf dibuat dengan menggunakan
tag dasar html.</p>
```

4. Selanjutnya simpan kembali perubahannya, dan lakukan refresh pada web browser, lihat hasilnya
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(325).png?raw=true)
5. Kemudian atur atribut paragraf seperti berikut, dan amati perubahanya.

```sh
<p align=”center”>Kami sedang belajar HTML dasar, pada matakuliah Pemrograman
Web di Prodi Teknik Informatika Universitas Pelita Bangsa. Pelajaran pertama
yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal
tag-tag dasar HTML.</p>
<p align=”right”>Ini merupakan sebuah paragraf yang terdiri dari beberapa
kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat
dengan menggunakan tag dasar html.</p>
```
6. Simpan kembali dan amati perubahannya dengan melakukan refresh pada web browser.
Selanjutnya silakan ubah-ubah nilai atributnya (align => justify, left, right, dan center) untuk melihat perbedaan lainnya. 
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(326).png?raw=true)

#### Menambahkan Judul
7. Seperti sudah dijelaskan pada materi bahwa judul memiliki 6 level yaitu mulai h1 sampai h6. Kemudian tambahkan judul h1 sebelum paragraf pertama dan tambahkan sub judul h2 sebelum paragraf kedua.
```sh
<h1>Belajar Dasar HTML</h1>
    <p align=”center”>Kami sedang belajar HTML dasar, pada matakuliah Pemrograman Web di Prodi Teknik Informatika Universitas Pelita Bangsa. Pelajaran pertama yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar HTML.</p>

<h2>Paragraf pada HTML</h2>
    <p align=”right”>Ini merupakan sebuah paragraf yang terdiri dari beberapa kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat dengan menggunakan tag dasar html.</p>
```
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(327).png?raw=true)

#### Memformat Text
8.Lakukan pemformatan teks yang ada pada paragraf yang sudah ada sebelumnya, mengacu kepada penjelasan materi pemformatan teks, sehingga tampilannya seperti berikut.

![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(328).png?raw=true)

```sh
<h1>Belajar Dasar HTML</h1>
    <p align="justify">Kami sedang belajar <span style="background-color: yellow;">HTML Dasar</span>, pada matakuliah <b>Perograman Web</b>
    di Prodi <i>Teknik  Informatika</i> <u>Universitas Pelita Bangsa.</u> Pelajaran pertama
    yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal
    tag-tag dasar HTML.</p>

    <h2>Paragraf pada HTML</h2>
    <p align="left">Ini merupakan sebuah paragraf yang terdiri dari beberapa
    kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat
    dengan menggunakan tag dasar html.</p>
```
#### Membuat Halaman 2
```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1 Halaman2</title>
</head>
<body>
    <h1>Belajar Dasar HTML</h1>
    <p align="justify">Kami sedang belajar <span style="background-color: yellow;">HTML Dasar</span>, pada matakuliah <b>Perograman Web</b>
    di Prodi <i>Teknik  Informatika</i> <u>Universitas Pelita Bangsa.</u> Pelajaran pertama
    yang kami dapat adalah membuat tampilan web sederhana dalam rangka mengenal
    tag-tag dasar HTML.</p>

    
    <h2>Paragraf pada HTML</h2>
    <p align="left">Ini merupakan sebuah paragraf yang terdiri dari beberapa
    kalimat yang saling mendukung sehingga menjadi satu kesatuan. Paragraf dibuat
    dengan menggunakan tag dasar html.</p>

    <h3>Menambahkan Gambar</h3>
    <img src="Logo_upb.png" title="Logo Univeritas Pelita Bangsa" width="200px">
    
</body>
</html>
```

#### Menyisipkan Gambar
9. Untuk menyisipkan gmbar, siapkan gambar yang akan disisipkan pada halaman web, kemudian simpan file gambar tersebut satu folder dengan file dokumen html. Atau bisa juga menyisipkan gambar dari website external.
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%202024-09-30%20190944.png?raw=true)
10. Kemudian tambahkan tag img setelah paragraf yang kedua, dengan menambahkan heading 3 sebelumnya.

```sh
<h3>Menambahkan Gambar</h3>
    <img src="Logo_upb.png" title="Logo Univeritas Pelita Bangsa">
```
11. Simpan perubahannya, kemudian refresh browser.
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(332).png?raw=true)
12. Gambar akan ditampilkan apa adanya sesuai dengan ukuran aslinya. Untuk mengatur ukuran gambar, dapat digunakan atribut witdh dan height dengan nilai integer yang disesuaikan.
```sh
<h3>Menambahkan Gambar</h3>
    <img src="Logo_upb.png" title="Logo Univeritas Pelita Bangsa" width="200px">
```
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(330).png?raw=true)
#### Menambahkan Hyper Link
13. Tambahkan hyperlink pada dokumen sebelum heading 1 seperti berikut.

```sh
<nav>
    <a href="lab1_tag_dasar.html">Dasar HTML</a>
    <a href="lab1_halaman2.html">Halaman 2</a>
    <a href="http://www.google.com">Halaman Web Eksternal Google</a>
    </nav>
    <hr>
```
![alt text](https://github.com/Ainun27/Lab1Web/blob/main/tugas/Screenshot%20(331).png?raw=true)

## Pertanyaan 
1. Lakukan perubahan pada kode sesuai dengan keinginan anda, amati perubahannya adakah error ketika terjadi kesalahan penulisan tag?
2. Apa perbedaan dari tag p dengan tag br, berikan penjelasannya!
3. Apa perbedaan atribut title dan alt pada tag <img>, berikan penjelasannya!
4. Untuk mengatur ukuran gambar, digunakan atribut width dan height. Agar tampilan gambar proporsional sebaiknya kedua atribut tersebut diisi semua atau tidak? Berikan penjelasannya!
5. Pada link tambahkan atribut target dengan nilai atribut bervariasi ( _blank,_self, _top, _parent ), apa yang terjadi pada masing-masing nilai antribut tersebut?

## Jawaban
1. Saya tidak mengalami eror ataupun salah dalam penulisan tag.
2. tag p : Membuat paragraf dengan spasi di atas dan di bawah teks. tag br : Memulai baris baru tanpa menambah spasi.
3. alt: Ditampilkan saat gambar gagal dimuat atau untuk pembaca layar. title: Ditampilkan sebagai tooltip ketika kursor diarahkan ke gambar.
4. Agar gambar tetap proporsional, cukup isi satu dari atribut width atau height, sehingga browser otomatis menyesuaikan dimensi lainnya berdasarkan rasio asli gambar.
5. Setiap nilai atribut target pada tag <a> memiliki fungsi yang berbeda untuk mengontrol bagaimana link dibuka. _blank: Tab/jendela baru. _self: Tab/jendela saat ini. _top: Jendela penuh, keluar dari semua frame. _parent: Frame induk dari frame saat ini.
   
