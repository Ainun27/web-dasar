# Lab2Web
## Ainun Dwi Permana (312310013)

Tugas mengerjakan latihan pada module dua Pemrograman Web

#### Membuat Membuat dokumen HTML

```sh
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CSS Dasar</title>
</head>
<body>

 <header>
 <h1>CSS Internal dan <i>Inline CSS</i></h1>
 </header>

 <nav>
 <a href="lab2_css_dasar.html">CSS Dasar</a>
 <a href="lab2_css_eksternal.html">CSS Eksternal</a>
 <a href="lab1_tag_dasar.html">HTML Dasar</a>
 </nav>

 <!-- CSS ID Selector -->
 <div id="intro">
 <h1>Hello World</h1>
 <p>Kami sedang belajar HTML dan CSS dasar, pada mata kuliah <b>Pemrograman
Web</b> di <i>Universitas Pelita Bangsa</i>. Pelajaran pertama yang kami dapat
adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar HTML
dan CSS.</p>
 <!-- CSS Class Selector -->
 <a class="button btn-primary" href="#intro">Informasi selengkapnya.</a>
 </div>

</body>
</html>
```

1. Selanjutnya buka pada brwoser untuk melihat hasilnya.
   
![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20182343.png?raw=true)

#### Mendeklarasikan CSS Internal

```sh
<head>
 <title>CSS Dasar</title>
 <style>
 body {
 font-family:'Open Sans', sans-serif;
 }
 header {
 min-height: 80px;
 border-bottom:1px solid #77CCEF;
 }
 h1 {
 font-size: 24px;
 color: #0F189F;
 text-align: center;
 padding: 20px 10px;
 }
 h1 i {
 color:#6d6a6b;
 }
 </style>
</head>
```

2. Selanjutnya simpan perubahan yang ada, dan lakukan refresh pada browser untuk melihat hasilnya.
   
![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20182508.png?raw=true)

#### Menambahkan Inline CSS

3. Kemudian tambahkan deklarasi inline CSS pada tag <p> seperti berikut.

```sh
<p style="text-align: center; color: #ccd8e4;">
```

4. Simpan kembali dan refresh kembali browser untuk melihat perubahannya.
   
![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20182638.png?raw=true)

#### Membuat CSS Eksternal

5. Buatlah file baru dengan nama style_eksternal.css kemudian buatlah deklarasi CSS seperti berikut.

```sh
nav {
background: #20A759;
color:#fff;
padding: 10px;
}
nav a {
color: #fff;
text-decoration: none;
padding:10px 20px;
}
nav .active,
nav a:hover {
background: #0B6B3A;
}
```

6. Kemudian tambahkan tag <link> untuk merujuk file css yang sudah dibuat pada bagian <head>

```sh
<head>
 <!-- menyisipkan css eksternal -->
 <link rel="stylesheet" href="style_eksternal.css" type="text/css">
</head>
```

7. Selanjutnya refresh kembali browser untuk melihat perubahannya.

![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20183144.png?raw=true)

#### Menambahkan CSS Selector

8. Selanjutnya menambahkan CSS Selector menggunakan ID dan Class Selector. Pada file
style_eksternal.css, tambahkan kode berikut.

```sh
/* ID Selector */
#intro {
background: #418fb1;
border: 1px solid #099249;
min-height: 100px;
padding: 10px;
}
#intro h1 {
text-align: left;
border: 0;
color: #fff;
}
/* Class Selector */
.button {
 padding: 15px 20px;
background: #bebcbd;
color: #fff;
display: inline-block;
margin: 10px;
text-decoration: none;
}
.btn-primary {
background: #E42A42;
}
```

9. Kemudian simpan kembali dan refresh browser untuk melihat perubahannya.

![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20183256.png?raw=true)
  
## Pertanyaan Dan Tugas

1. Lakukan eksperimen dengan mengubah dan menambah properti dan nilai pada kode CSS dengan mengacu pada CSS Cheat Sheet yang diberikan pada file terpisah dari modul ini.

#### Code html

```sh
<div class="artikel1">
    <p>Hallo, saya ainun dwi permana. mahasiswa universitas pelita bangsa. 
        senang bisa mendapatkan kesempatan mempelajasi css</p>
</div>
```

#### Code css

```sh
.artikel1 {
        background-color: antiquewhite;
    }

p {
        border: 2px solid black;
    }
```

#### hasil 

![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20184834.png?raw=true)

2. Apa perbedaan pendeklarasian CSS elemen h1 {...} dengan #intro h1 {...}? berikan penjelasannya!

- h1 { ... }: Mengatur semua elemen tag h1 di seluruh halaman web.
- #intro h1 { ... }: Mengatur hanya elemen tag h1 yang berada di dalam elemen dengan id="intro", sehingga lebih spesifik.

3. Apabila ada deklarasi CSS secara internal, lalu ditambahkan CSS eksternal dan inline CSS pada elemen yang sama. Deklarasi manakah yang akan ditampilkan pada browser? Berikan penjelasan dan contohnya!

- Ketika ada beberapa deklarasi CSS (internal, eksternal, dan inline) yang diterapkan pada elemen yang sama, prioritas (atau yang disebut CSS specificity) akan menentukan gaya mana yang diterapkan di browser.

- Urutan prioritas dalam CSS adalah sebagai berikut:

- Inline CSS: Deklarasi CSS yang ditulis langsung di atribut elemen HTML memiliki prioritas paling tinggi.
- Internal CSS: Deklarasi yang diletakkan di dalam tag <style> di bagian <head> memiliki prioritas di bawah inline CSS.
- External CSS: Deklarasi CSS yang di-link melalui file eksternal memiliki prioritas yang paling rendah dibandingkan dua yang lainnya.
- Namun, spesifisitas selektor dan importance (!important) juga bisa memengaruhi prioritas.

#### contoh

#### Css Eksternal 

```sh
.artikel1 {
        background-color: antiquewhite;
    }
```

#### Css Internal

```sh
<head>
  <style>
    .artikel1{
            background-color: #77CCEF;
        }
  </style>
</head>
```

#### Inline Css

```sh
<div class="artikel1" style="background-color: bisque;">
    <p>Hallo, saya ainun dwi permana. mahasiswa universitas pelita bangsa. 
        senang bisa mendapatkan kesempatan mempelajasi css</p>
</div>
```

#### Hasilnya

![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20193845.png?raw=true)

4. Pada sebuah elemen HTML terdapat ID dan Class, apabila masing-masing selector tersebut terdapat deklarasi CSS, maka deklarasi manakah yang akan ditampilkan pada browser? Berikan penjelasan dan contohnya! ( <p id="paragraf-1" class="text-paragraf"> )

- Urutan Spesifisitas CSS:
  
-  Inline CSS (misalnya, style="...") memiliki prioritas tertinggi.
- Selector ID (misalnya, #paragraf-1) memiliki prioritas lebih tinggi dibandingkan selector class.
- Selector Class (misalnya, .text-paragraf) memiliki prioritas lebih tinggi dibandingkan selector elemen.
- Selector Elemen (misalnya, p { ... }) memiliki prioritas terendah.

#### contoh

#### Di HTML

```sh
<p id="paragraf-1" class="text-paragraf">Ini adalah paragraf contoh.</p>
```

#### CSS dengan selector ID

```sh
#paragraf-1 {
  color: blue;
  font-size: 18px;
}
```

#### CSS dengan selector Class

```sh
.text-paragraf {
  color: red;
  font-size: 16px;
}
```

#### Hasilnya

![alt text](https://github.com/Ainun27/Lab2Web/blob/main/tugas2/Screenshot%202024-10-08%20195405.png?raw=true)


