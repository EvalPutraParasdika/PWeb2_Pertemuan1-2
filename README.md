# Dokumentasi Projek Pertemuan 1 dan 2

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

### Hasil
![image](https://github.com/user-attachments/assets/09b73318-dc1d-4cbe-87ce-5c1cab6cdd9f)


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

### Hasil
![image](https://github.com/user-attachments/assets/21275489-6abc-4be3-973f-38b2f0e85b7b)



## Inheritance
### Kelas Produk
![image](https://github.com/user-attachments/assets/dd2fb6c4-2db7-4909-a8bc-25fdf2d07323)

protected $nama: Atribut $nama memiliki visibilitas protected, artinya atribut ini dapat diakses oleh kelas Produk sendiri dan kelas turunannya (seperti Buku).
__construct($nama): Konstruktor kelas Produk menerima parameter $nama dan menginisialisasi atribut $nama dari objek.
getNama(): Metode getter untuk mendapatkan nilai dari atribut $nama.


### Kelas Buku
![image](https://github.com/user-attachments/assets/3cdd4e8d-1753-49bb-889c-c9310a073615)

extends Produk: Menyatakan bahwa kelas Buku mewarisi dari kelas Produk.
private $penulis: Atribut $penulis hanya dapat diakses di dalam kelas Buku sendiri.
__construct($nama, $penulis): Konstruktor kelas Buku menerima dua parameter, $nama dan $penulis. Ia memanggil konstruktor induk (parent::__construct($nama)) untuk menginisialisasi atribut $nama yang diwarisi dari kelas Produk, kemudian menginisialisasi atribut $penulis milik kelas Buku sendiri.
getPenulis(): Metode getter untuk mendapatkan nilai dari atribut $penulis.


### Membuat Objek dan Mengaksesnya
![image](https://github.com/user-attachments/assets/ad02d1dc-b7c2-471b-9095-78a5cb9bb38d)

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");: Membuat objek baru dari kelas Buku dengan judul "Pemrograman PHP" dan penulis "Andi Prasetyo".
echo $buku1->getNama();: Memanggil metode getNama() pada objek $buku1 untuk mendapatkan nilai judul buku (yang diwarisi dari kelas Produk) dan kemudian mencetaknya ke layar.

### Hasil
![image](https://github.com/user-attachments/assets/15b1f1d8-48ed-47c1-9cc2-6c9c943ea496)


# Jobsheet 2
## Class & Object
### Class 
![image](https://github.com/user-attachments/assets/4f509e8b-5028-46af-b851-11adea3d88f7)

class Mahasiswa: Mendefinisikan sebuah kelas baru dengan nama Mahasiswa. Kelas ini menjadi blueprint atau cetak biru untuk membuat objek-objek yang merepresentasikan data mahasiswa.

### Atribut (Properties)
![image](https://github.com/user-attachments/assets/04c36aea-bd96-4233-bba1-0fe2d917ae54)

$nama: Atribut publik yang digunakan untuk menyimpan nama mahasiswa.
$nim: Atribut publik yang digunakan untuk menyimpan Nomor Induk Mahasiswa.
$jurusan: Atribut publik yang digunakan untuk menyimpan jurusan mahasiswa.

### Constructor
![image](https://github.com/user-attachments/assets/aa1ec153-7c14-4201-a000-a1b30ded105c)

__construct(): Metode khusus yang secara otomatis dipanggil ketika objek Mahasiswa baru dibuat.
Parameter:
$nama: Nilai yang akan diberikan kepada atribut $nama.
$nim: Nilai yang akan diberikan kepada atribut $nim.
$jurusan: Nilai yang akan diberikan kepada atribut $jurusan.
Function: Menginisialisasi objek Mahasiswa dengan nilai-nilai yang diberikan saat objek dibuat.

### Method 
![image](https://github.com/user-attachments/assets/39a312ce-2bdf-4c7a-95f1-0d1c04e6d29c)

Function: Metode ini digunakan untuk menampilkan data mahasiswa dalam bentuk string.

### Membuat Objek dan Mengaksesnya
![image](https://github.com/user-attachments/assets/dcec7d65-5c7b-49a8-aa44-b4b1271fa510)

$mahasiswa1 = new Mahasiswa(...): Membuat objek baru dari kelas Mahasiswa dengan nama "Eval", NIM "23020202009", dan jurusan "Jurusan Komputer dan Bisnis". Objek ini disimpan dalam variabel $mahasiswa1.
echo $mahasiswa1->tampilkanData();: Memanggil metode tampilkanData() pada objek $mahasiswa1 untuk menampilkan data mahasiswa ke layar.

### Hasil

![image](https://github.com/user-attachments/assets/c1d160c7-69b5-47d9-b6d3-171f90711a8e)


## Encapsulation
### Definisi Kelas
![image](https://github.com/user-attachments/assets/616398ca-3cbe-4767-bee3-5f994331c0e3)

class Mahasiswa: Mendefinisikan sebuah kelas baru dengan nama Mahasiswa. Kelas ini menjadi blueprint atau cetak biru untuk membuat objek-objek yang merepresentasikan data mahasiswa.

### Atribut (Properties)
![image](https://github.com/user-attachments/assets/585f93b0-a6f0-4453-95cb-890e65a20c53)

private $nama, private $nim, private $jurusan: Atribut-atribut ini memiliki visibilitas private. Artinya, atribut ini hanya dapat diakses dari dalam kelas Mahasiswa itu sendiri.

### Constructor
![image](https://github.com/user-attachments/assets/b2d6cd02-c477-4270-9134-0e9db9a0ed11)

__construct(): Metode khusus yang secara otomatis dipanggil ketika objek Mahasiswa baru dibuat.
Parameter:
$nama: Nilai yang akan diberikan kepada atribut $nama.
$nim: Nilai yang akan diberikan kepada atribut $nim.
$jurusan: Nilai yang akan diberikan kepada atribut $jurusan.
Function: Menginisialisasi objek Mahasiswa dengan nilai-nilai yang diberikan saat objek dibuat.

### Method getter & setter
![image](https://github.com/user-attachments/assets/5e637462-f64f-4521-a19d-49de9deef2c8)

getNama(), getNim(), getJurusan(): Metode-metode ini adalah getter yang digunakan untuk mendapatkan nilai dari atribut-atribut yang sesuai.
setNama(), setNim(), setJurusan(): Metode-metode ini adalah setter yang digunakan untuk mengubah nilai dari atribut-atribut yang sesuai.

###  Membuat Objek dan Mengaksesnya
![image](https://github.com/user-attachments/assets/198364da-9da3-46ff-bb14-4554912da6a9)

$mahasiswa1 = new Mahasiswa(...): Membuat objek baru dari kelas Mahasiswa dengan nama "Eval", NIM "230202009", dan jurusan "Komputer dan Bisnis". Objek ini disimpan dalam variabel $mahasiswa1.
echo $mahasiswa1->getNama();: Memanggil metode getNama() pada objek $mahasiswa1 untuk mendapatkan nilai nama mahasiswa dan kemudian mencetaknya ke layar.

### Hasil
![image](https://github.com/user-attachments/assets/0a4ffcca-2629-4cdc-acf4-121cf42520e5)



