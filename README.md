# Dokumentasi Projek
﻿Pertemuan1-2
﻿Praktikum_Web2

## Pendahuluan
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object

digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-
prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan

Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.
## Konsep Dasar OOP
### Definisi kelas

<img width="247" alt="Screenshot 2024-08-27 021443" src="https://github.com/user-attachments/assets/9563ae2c-4991-4556-83f5-e4b41994ed6c">

Mendefinisikan kelas baru bernama Buku, kelas ini menjadi blueprint untuk membuat objek - objek dengan tipe data "Buku"


### Atribut (Properties)

<img width="188" alt="image" src="https://github.com/user-attachments/assets/ff3f6b9b-fd88-482b-b9be-19c4d2f16b76">

public $judul: Atribut publik yang menyimpan judul buku.
public $penulis: Atribut publik yang menyimpan nama penulis buku.


### Konstruktor

![image](https://github.com/user-attachments/assets/00002e0e-18b6-4c17-b96d-9e2c43e4c19a)

__construct(): Metode khusus yang secara otomatis dipanggil ketika objek Buku baru dibuat.
Parameter :
$judul : value yang akan dimasukan ke atribut $judul
$penulis : value yang akan dimasukan ke atribut $penulis
Function : Menginisialisasi objek Buku dengan nilai-nilai yang diberikan saat pembuatan objek.


### Method
![image](https://github.com/user-attachments/assets/d9df12fb-ac0a-449d-9103-32d33bb06a86)

tampilkanInfo(): Metode yang digunakan untuk menampilkan informasi mengenai buku 
Return: Mengembalikan sebuah string yang berisi judul dan penulis buku.

### Membuat Objek dan memanggil Method

![image](https://github.com/user-attachments/assets/2d685e17-dddd-47ff-91f2-b100c32b7dea)

$buku1 = new Buku(...): Membuat objek baru dari kelas Buku dengan judul "Pemrograman PHP" dan penulis "Andi Prasetyo". Objek ini disimpan dalam variabel $buku1.
echo $buku1->tampilkanInfo();: Memanggil metode tampilkanInfo() pada objek $buku1 dan mencetak hasilnya ke layar.

## Encapsulation

### Definisi kelas

<img width="247" alt="Screenshot 2024-08-27 021443" src="https://github.com/user-attachments/assets/9563ae2c-4991-4556-83f5-e4b41994ed6c">

Mendefinisikan kelas baru bernama Buku, kelas ini menjadi blueprint untuk membuat objek - objek dengan tipe data "Buku"


### Atribut (Properties)

<img width="188" alt="image" src="https://github.com/user-attachments/assets/ff3f6b9b-fd88-482b-b9be-19c4d2f16b76">

public $judul: Atribut publik yang menyimpan judul buku.
public $penulis: Atribut publik yang menyimpan nama penulis buku.


### Konstruktor

![image](https://github.com/user-attachments/assets/00002e0e-18b6-4c17-b96d-9e2c43e4c19a)

__construct(): Metode khusus yang secara otomatis dipanggil ketika objek Buku baru dibuat.
Parameter :
$judul : value yang akan dimasukan ke atribut $judul
$penulis : value yang akan dimasukan ke atribut $penulis
Function : Menginisialisasi objek Buku dengan nilai-nilai yang diberikan saat pembuatan objek.


### Method

![image](https://github.com/user-attachments/assets/fd04111b-2f2e-47ac-9ac0-5eeb43ee720f)

function : Metode ini digunakan untuk mendapatkan nilai dari atribut $judul (getter)


### Method

![image](https://github.com/user-attachments/assets/47e033f1-f087-4247-8266-99ea4fb178af)

function : Metode ini digunakan untuk mengubah nilai dari atribut $judul (setter)


### Membuat Objek dan Mengaksesnya

![image](https://github.com/user-attachments/assets/21d76a36-0143-401f-97d5-a29a96b6ec57)

$buku1 = new Buku(...) : Membuat objek baru yang disimpan di dalam variabel $buku1
echo $buku1->getJudul();: Memanggil metode getJudul() pada objek $buku1 untuk mendapatkan nilai judul buku dan kemudian mencetaknya ke layar.




## Inheritance


