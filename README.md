<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Website Perpustakaan SMKN 1 Denpasar</h1>
    <br>
</p>

## Description
Mengembangkan perpustakaan sekolah saat ini menjadi prioritas untuk menentukan kemajuan literasi setiap individu dalam ekosistem sekolah. Teknologi informasi dan komunikasi menjadi pemicu dalam memberikan kemudahan akses informasi, termasuk akses ke perpustakaan. Penelitian ini mempelajari; Pertama, rancangan bentuk perpustakaan sekolah berbasis aplikasi mobile yang disebut library apps. kedua, prosedur adaptasi aplikasi di perpustakaan sekolah.

## Features

- Peminjaman Buku
- Pengembalian Buku
- Buku Pelajaran
- Buku Cerita

## Tech
Aplikasi ini dibangun menggunakan:

- [PHP](https://www.php.net/) - Aplikasi PHP ini sangat penting digunakan dalam proses pembuatan website perpustakaan dan digunakan bahkan keseluruhan program.
- [XAMPP](https://www.apachefriends.org/index.html) - Aplikasi XAMPP yang saya gunakan disini untuk mengelola database MYSQL dengan php MyAdmin, dan menjalankan script PHP.
- [Yii2 Framework](https://www.yiiframework.com/) - Yii Framework merupakan sebuah framework PHP yang memiliki performa yang bagus. Di website perpustakaan ini saya menggunakan Yii framework.
- [PHPMyAdmin](https://www.phpmyadmin.net/) - Aplikasi PHP MyAdmin digunakan untuk membuat database, relation dan juga migrate.

## Installation

Clone project
```sh
git clone https://github.com/sintya23/perpus_skensa.git
```

Install dependencies menggunakan composer

```sh
composer install
```
Membuat database di config sesuai dengan db.php

```sh
dbname=perpusskensa
```
Run migrate 

```sh
yii migrate
```

Hasil run dari website SMKN 1 Denpasar

```sh
php yii serve --port=8089
```

```sh
localhost:8089
```

## Plugins

| Plugin | README |
| ------ | ------ |
| GitHub | [plugins/https://github.com/sintya23/landing_page.git][PlGh] |