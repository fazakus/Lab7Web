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