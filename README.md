# Lab7Web
## Tugas Praktikum 6
## PHP Dasar

Nama : Faza Ardan Kusuma<br>
NIM : 312010001<br>
Kelas : TI 20 B1<br>

<hr>

## Instalasi XAMPP
Disini saya akan install terlebih dahulu untuk aplikasi XAMPP.<br>
![Install XAMPP](Pic/install1.png)<br><br>
Setelah selesai install <b>XAMPP</b>, lalu buka aplikasinya. Kemudian jalankan <b>Apache</b>.<br>
![XAMPP Control Panel](Pic/xampp.png)<br><br>

Kemudian buka <b>Web Server</b> tersebut pada browser, disini saya menggunakan <b>Google Chrome</b>. Pada google chrome, ketik http://localhost/ atau http://127.0.0.1/. Tampilan halaman tersebut seperti berikut :<br>
![localhost](Pic/localhost.png)<br><br>

## Memulai PHP
Disini saya akan menyesuaikan folder root dierctory web server sesuai dengan folder tugas ini. Saya akan membuat folder baru dengan nama <b>lab7_php_dasar</b> pada folder <b>Lab7Web</b>. Berikut tampilannya : <br>
![Mulai PHP](Pic/dir1.png)<br>

## PHP Dasar
Pindah pada direktori yang sudah dibuat tadi dan buat file baru dengan nama <b>php_dasar.php</b>. Pada file ini saya akan mengisinya dengan <i>Hello world</i>. Berikut syntaxnya :
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
```
Berikut outputnya :<br>
![Hello World](Pic/helloworld.png)<br>

## Variable PHP
Disini saya akan membuat variable pada PHP. Untuk variable PHP menggunakan $ untuk mendifinisikan. Berikut adalah syntaxnya
```
    <?php 
        $nim = "312010001"; 
        $nama = 'Faza Ardan Kusuma'; 
        
        echo "NIM : " . $nim . "<br>"; 
        echo "Nama : $nama"; 
    ?>
```
Berikut outputnya<br>
![Variable PHP](Pic/menggunakan%20variable.png)<br>

## Predifine Variable
Pada predifine variable ini saya membuat file baru dengan nama latihan2.php lalu memasukkan syntax berikut.
```
    <?php
        echo "Selamat Datang ".$_GET['nama'];
    ?>
```
Lalu untuk mengaksesnya dengan membuka link berikut :<br>
http://localhost/Lab7Web/lab7_php_dasar/latihan2.php?nama=Faza<br>
Berikut outputnya<br>
![Predifine Variable](Pic/predefine%20variable.png)<br>


## Membuat Form Input
Disini saya akan membuat form input. Saya akan membuat file baru dengan nama <b>form_input.php</b>. Berikut syntaxnya
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
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
Disini saya menggunakan HTML dan PHP, berikut outputnya.<br>
![Form Input](Pic/form_input.png)<br>


## Operator
Disini yang akan saya buat adalah operator aritmatika, maka disini saya membuat file baru dengan nama <b>operator.php</b>. Untuk syntaxnya sebagai berikut.<br>
```
    <?php 
    $gaji = 1000000; 
    $pajak = 0.1; $thp = $gaji - ($gaji*$pajak); 
    echo "Gaji sebelum pajak = Rp. $gaji <br>"; 
    echo "Gaji yang dibawa pulang = Rp. $thp"; 
    ?>
```
Untuk outputnya, seperti berikut.<br>
![Operator](Pic/operator.png)<br>


## Kondisi If
Kondisi if dan else digunakan untuk memeriksa suatu nilai, bila TRUE maka kondisi if akan berjalan, bilamana False, maka kondisi ELSE yang akan dijalankan. Disini saya membuat file baru dengan syntax berikut.
```
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
```
Tampilan output<br>
![Kondisi IF](Pic/kondisi_if.png)<br>

## Kondisi Switch
Kondisi SWITCH adalah percabangan / pemilihan dimana kita membandingkan isi sebuah variabel dengan beberapa nilai. Disini saya membuat file baru dengan nama <b>kondisi_switch.php</b>. Berikut syntaxnya.<br>
```
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
            echo "Sabtu"; 
        }
    ?>
```

Tampilan outputnya.<br>
![Kondisi Switch](Pic/kondisi_switch.png)<br>


## Perulangan For
Perulangan for digunakan untuk membuat sebuah perulangan dengan batas yang ditentukan / diketahui. Disini saya akan membuat file baru dengan nama <b>perulangan_for.php</b> dan dengan syntax berikut.<br>
```
    <?php 
    echo "Perulangan 1 sampai 10 <br />"; 
    for ($i=1; $i<=10; $i++) { 
        echo "Perulangan ke: " . $i . '<br />'; 
    } 
    
    echo '<hr>';

    echo "Perulangan Menurun dari 10 ke 1 <br />"; 
    for ($i=10; $i>=1; $i--) { 
        echo "Perulangan ke: " . $i . '<br />'; 
    } 
    ?>
```

Tampilan output.<br>
![Perulangan For](Pic/perulangan_for.png)<br>


## Perulangan While
Perulangan while hampir sama dengan perulangan for, hanya saja bedanya adalah untuk perulangan while tidak diketahui batasnya. Saya membuat file baru dengan nama <b>perulangan_while</b> dengan syntax berikut.<br>
```
    <?php 
    echo "Perulangan 1 sampai 10 <br />"; 
    $i=1; 
    while ($i<=10) { 
        echo "Perulangan ke: " . $i . '<br />'; 
        $i++; 
    } 
    ?>
```

Tampilan output. <br>
![Perulangan While](Pic/perulangan_while.png)<br>


## Perulangan Do While
Perulangan while dan do-while pada dasarnya hampir sama. Perbedaan terletak pada <i>lokasi</i> pengecekan kondisi perulangan.<br>
Dalam struktur while, pengecekan untuk kondisi perulangan di lakukan di awal, sehingga jika kondisi tidak terpenuhi, maka perulangan tidak akan pernah dijalankan. Namun pada perulangan do-while, pengecekan kondisi akan dilakukan di akhir perulangan, sehingga walaupun kondisi adalah FALSE, perulangan akan tetap berjalan minimal 1 kali. Disini saya membuat file baru dengan nama <b>perulangan_do_while.php</b> dengan syntax berikut.<br>
![Perulangan Do While](Pic/perulangan_do_while.png)<br>

<hr>

## Tugas Praktikum
Disini saya diberikan tugas untuk membuat program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.<br>

## Jawaban
Saya sudah membuat sesuai dengan tugas dengan 3 pilihan pekerjaan, yaitu : <br>
<b>Operator</b> dengan gaji Rp. 5.000.000<br>
<b>Supervisor</b> dengan gaji Rp. 7.500.000<br>
<b>Manager</b> dengan gaji Rp. 10.000.000<br>
Berikut adalah outputnya :<br>
![Tugas](Pic/tugas.png)