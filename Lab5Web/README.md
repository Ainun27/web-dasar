# Lab5Web
## Ainun Dwi Permana (312310013)

Tugas mengerjakan latihan pada module dua Pemrograman Web

#### Persiapan membuat dokumen HTML dengan nama file lab5_javascript.html seperti berikut

```ssh
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mengenal JavaScript</title>
</head>
<body>
    <h1>Pengenalan JavaScript</h1>
    <h3>Contoh document.write dan console.log</h3>
    <script>
        document.write("Hello World");
        console.log("Hello World");
    </script>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/1.png?raw=true)

#### Javascrip Dasar
- Pemakaian Alert sebagai property window

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>Alert Box</title>
</head>
<body>
<script language = "javaScript">
    <!--
        window.alert("Ini merupakan pesan untuk anda");
    -->
</script>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/2.png?raw=true)

- Pemakaian method dalam objek

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>skrip javascript</title>
</head>
<body>
percobaan memakai javascript:<br>
<script language = "javaScript">
    <!--
        document.write("selamat mencoba javascript<br>");
        document.write("semoga sukses!")
    -->
</script>
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/3.png?raw=true)

- Pemakaian Prompt

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>pemasukan data</title>
</head>
<body>
<script language="javascript">
    <!--
        var nama = prompt ("Siapa nama anda?", "Masukan nama anda?");
        document.write("hai, "+ nama);
        -->
</script>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/4.png?raw=true)
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/41.png?raw=true)

- Pembuatan fungsi dan cara pemanggilannya

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Program JavaScript</title>
    <script>
        function pesan() {
            alert("Memanggil JavaScript lewat body onload");
        }
    </script>
</head>
<body onload="pesan()">
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/5.png?raw=true)

#### Dasar Pemrograman Di Javascript
- Operasi dasar aritmatika

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>contoh program javascript</title>

    <script language="javascript">
        function test (val1,val2)
    {
        document.write("<br>"+"perkalian : val1*val2 "+"<br>")
        document.write(val1*val2)
        document.write("<br>"+"pembagian : val1/val2 "+"<br>")
        document.write(val1/val2)
        document.write("<br>"+"penjumlahan : val1+val2 "+"<br>")
        document.write(val1+val2)
        document.write("<br>"+"pengurangan : val1-val2 "+"<br>")
        document.write(val1-val2)
        document.write("<br>"+"modulus : val1%val2 "+"<br>")
        document.write(val1%val2)
    }
    </script>
</head>
<body>
    <input type="button" name="button1" value="arithmetic" onclick="test(9,4)">
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/6.png?raw=true)
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/61.png?raw=true)

- Seleksi kondisi (if..else)

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>contoh if-else</title>
</head>
<body>
    <script language="javascript">
        var nilai = prompt("nilai (0-100): ", 0);
        var hasil = "";
        if (nilai >= 60)
        hasil = "lulus";
        else
        hasil = "tidak lulus";
        document.write("hasil: " + hasil);
    </script>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/7.png?raw=true)
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/71.png?raw=true)

- Penggunaan operator switch untuk seleksi kondisi

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Program JavaScript</title>
    <script language="javascript">
        function test() {
            var val1 = window.prompt("Input nilai (1-5):");
            switch (val1) {
                case "1":
                    document.write("bilangan satu");
                    break;
                case "2":
                    document.write("bilangan dua");
                    break;
                case "3":
                    document.write("bilangan tiga");
                    break;
                case "4":
                    document.write("bilangan empat");
                    break;
                case "5":
                    document.write("bilangan lima");
                    break;
                default:
                    document.write("bilangan lainnya");
            }
        }
    </script>
</head>
<body>
    <input type="button" name="button1" value="Cek Bilangan" onclick="test()">
</body>
</html>
```
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/8.png?raw=true)
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/81.png?raw=true)
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/82.png?raw=true)

#### Pembuatan Form
- Form Input

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Program JavaScript</title>
    <script language="javascript">
        function test() {
            var val1 =document.kirim.T1.value
            if (val1%2==0)
                document.kirim.T2.value="bilangan genap"
            else
                document.kirim.T2.value="bilangan ganjil"
        }
    </script>
</head>
<body>
    <form method="POST" name="kirim">
            <p>BIL <input type="text" name="T1" size="20">MERUPAKAN BIL <input type="text" name="T2" size="20"></p>
            <p><input type="button" value="TEBAK" name="B1" onclick=test()></p>
    </form>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/9.png?raw=true)

- form button

```ssh
<html>
<head>
    <title>objek document</title>
</head>
<body>
    <script language="javascript">
    <!--
        function ubahWarnaLB(warna) {
            document.bgColor = warna;
        }
        
        function ubahWarnaLD(warna) {
            document.fgColor = warna;
        }
     //>
    </script>

    <h1>tes</h1>
    <form>
        <input type="button" value="Latar Belakang Hijau" onClick="ubahWarnaLB('GREEN')">
        <input type="button" value="Latar Belakang Putih" onClick="ubahWarnaLB('WHITE')">
        <input type="button" value="Teks Kuning" onClick="ubahWarnaLD('YELLOW')">
        <input type="button" value="Teks Biru" onClick="ubahWarnaLD('BLUE')">
    </form>
    <script language="javascript">
        <!--
        document.write("Dimodifikasi terakhir pada " + document.lastModified);
        //-->
    </script>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/10.png?raw=true)
![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/101.png?raw=true)

- HTML DOM

```ssh
<!-- File: daftar_menu.html -->
<html>
<head>
    <title>Daftar Menu</title>
    <script>
        function hitung(ele) {
            var total = document.getElementById('total').value;
            total = (total == "") ? 0 : parseInt(total);
            var harga = 0;

            if (ele.checked) {
                harga = ele.value;
                total += parseInt(harga);
            } else {
                harga = ele.value;
                if (total > 0) 
                    total -= parseInt(harga);
            }

            document.getElementById('total').value = total;
        }
    </script>
</head>
<body>
    <h1>Daftar Menu Makanan</h1>
    <label><input type="checkbox" value="5000" id="menu1" onclick="hitung(this);"> Ayam Goreng Rp. 5.000</label><br />
    <label><input type="checkbox" value="3000" id="menu2" onclick="hitung(this);"> Tempe Goreng Rp. 3.000</label><br />
    <label><input type="checkbox" value="2500" id="menu3" onclick="hitung(this);"> Telur Dadar Rp. 2.500</label><br />
    <strong>Total Bayar: Rp. <input id="total" type="text" /></strong>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/11.png?raw=true)

#### Pertanyaan dan Tugas
1. Buat script untuk melakukan validasi pada isian form.

```ssh
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Berikan Pesan</h2>
    <form id="contactForm">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br>
        <span class="error" id="nameError"></span><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <span class="error" id="emailError"></span><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <span class="error" id="messageError"></span><br>

        <button type="submit">Kirim</button>
    </form>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form

            // Mengambil nilai input
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            // Menghapus pesan error sebelumnya
            document.getElementById('nameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('messageError').textContent = '';

            let valid = true;

            // Validasi nama
            if (name === '') {
                document.getElementById('nameError').textContent = 'Nama tidak boleh kosong.';
                valid = false;
            }

            // Validasi email
            if (email === '') {
                document.getElementById('emailError').textContent = 'Email tidak boleh kosong.';
                valid = false;
            } else if (!validateEmail(email)) {
                document.getElementById('emailError').textContent = 'Format email tidak valid.';
                valid = false;
            }

            // Validasi pesan
            if (message === '') {
                document.getElementById('messageError').textContent = 'Pesan tidak boleh kosong.';
                valid = false;
            }

            // Jika semua validasi berhasil, kirim form
            if (valid) {
                alert('Form berhasil dikirim!');
                // Anda dapat menambahkan kode untuk mengirim data ke server di sini
            }
        });

        // Fungsi untuk memvalidasi format email
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
    </script>
</body>
</html>
```

![alt text](https://github.com/Ainun27/Lab5Web/blob/main/tugas5/12.png?raw=true)


