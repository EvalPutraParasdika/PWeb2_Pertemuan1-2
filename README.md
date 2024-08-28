# Dokumentasi Projek Pertemuan 3 dan 4

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

## Inheritance
### Definisi Kelas
![image](https://github.com/user-attachments/assets/c0132fe0-6175-49d1-9037-18e7dd4add81)

Mendefinisikan class Pengguna sebagai parent untuk kelas turunannya

### Atribut (Properties)
![image](https://github.com/user-attachments/assets/bab4a76a-89e4-485c-8cd5-a3f98363ef25)

protected $nama: Menyimpan nama pengguna

### Constructor
![image](https://github.com/user-attachments/assets/9c52a668-d49b-4fbe-85c0-cc02e468f0f4)

__construct($nama): Konstruktor untuk menginisialisasi objek Pengguna dengan nama yang diberikan.

### Method
![image](https://github.com/user-attachments/assets/be8b4353-465d-48a2-90d8-b9f7e912d64e)

getNama(): Metode untuk mendapatkan nilai nama pengguna.

### Class Dosen
![image](https://github.com/user-attachments/assets/7ab9867c-3564-4a58-8614-2dfa19831e4d)

Mendefinisikan kelas Dosen yang merupakan kelas turunan dari kelas Pengguna 

### Properties
![image](https://github.com/user-attachments/assets/9ae96249-455f-4ab1-a957-4d5b8498b691)

private $mataKuliah: Menyimpan nama mata kuliah.

### Constructor
![image](https://github.com/user-attachments/assets/2021dd97-9d82-47ba-af8c-fe05b65774b7)

__construct($nama, $mataKuliah): Konstruktor untuk menginisialisasi objek Dosen dengan nama dan mata kuliah yang diberikan. Memanggil konstruktor induk (parent::__construct($nama)) untuk menginisialisasi property $nama.

### Method
![image](https://github.com/user-attachments/assets/6bdb440a-fd6d-4628-b471-b31e36b20ab1)

getMataKuliah(): Metode untuk mendapatkan nilai mata kuliah yang diajar oleh dosen.

### Membuat Objek dan Mengaksesnya
![image](https://github.com/user-attachments/assets/27d75b7a-e5a2-4ee6-a625-8049bd173e5f)

$dosen1 = new Dosen("Eval Kece", "Alpro"): Membuat objek baru dari kelas Dosen dengan nama "Eval Kece" dan mata kuliah "Alpro". Objek disimpan di dalam variabel $dosen1
echo "Nama : " . $dosen1->getNama(): Memanggil metode getNama() pada objek $dosen1 untuk mendapatkan nilai nama dosen (yang diwarisi dari kelas Pengguna) dan kemudian mencetaknya ke layar
echo "Mata Kuliah : " . $dosen1->getMataKuliah(): Memanggil metode getMataKuliah() pada objek $dosen1 dan mencetaknya ke layar

### Hasil
![image](https://github.com/user-attachments/assets/11ccb78d-d48c-4894-973c-8d5449f70ff3)


## Polymorphism
### Kelas Pengguna dan Method
![image](https://github.com/user-attachments/assets/9ce1e61b-c074-4ef0-8d44-12ae5c612410)

Mendefinisikan kelas Pengguna sebagai parent untuk kelas turunan selanjutnya
Function aksesFitur(): Metode untuk mencetak "Lu adalah pengguna".

### Kelas Dosen dan Method
![image](https://github.com/user-attachments/assets/6397448b-5067-42a8-97dd-4ce82ed22d53)

Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
Function aksesFitur(): Mengoverride pesan di metode aksesFitur() dari parent menjadi "Lu adalah dosen".

### Kelas Mahasiswa dan Method
![image](https://github.com/user-attachments/assets/1ea3fb37-2a42-43c4-8c49-c3cd648b53d2)

Mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
Function aksesFitur(): Mengoverride pesan di metode aksesFitur() dari parent menjadi "Lu adalah mahasiswa".

### Membuat Objek dan Mengaksesnya
![image](https://github.com/user-attachments/assets/f33d5079-5a4b-4e99-a5ee-fe37adfe0497)

Membuat 3 objek baru (Pengguna, Dosen, Mahasiswa) yang semuanya disimpan dalam variabel masing - masing ($user1, $user2, $user3)
$user1->aksesFitur(): Memanggil metode aksesFitur() pada masing - masing objek untuk mencetak pesan ke layar.

### Hasil
![image](https://github.com/user-attachments/assets/ec2145c2-6556-477a-8bc3-d210d69e8373)


## Abstract
### Kelas Pengguna dan Method
![image](https://github.com/user-attachments/assets/66ecfd0a-71c9-4be5-8e70-953857e0ec8e)

Mendefinisikan kelas Pengguna sebagai parent untuk kelas turunan selanjutnya
Function aksesFitur(): Metode kosong untuk diisi oleh kelas turunannya.

### Kelas Dosen dan Method
![image](https://github.com/user-attachments/assets/6f6a66d2-4d33-4772-bcdc-4f34686e7c2d)

Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
Function aksesFitur(): mengoverride metode akses fitur dari parent untuk diisi "Lu adalah dosen".

### Kelas Mahasiswa dan Method
![image](https://github.com/user-attachments/assets/05e6cace-a23d-48f8-8d55-d723e4d43608)

Mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
Function aksesFitur(): mengoverride metode akses fitur dari parent untuk diisi "Lu adalah mahasiswa".

### Hasil
![image](https://github.com/user-attachments/assets/f1cb8148-d2c5-4180-8621-8706456856fe)


#  Dokumentasi Projek Pertemuan 1 dan 2
## Pendahuluan
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.

## Materi Pokok 
## Kelas dan Objek dalam PHP
### Kelas
• Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek. <br>
• Atribut atau properties adalah variabel yang menyimpan data untuk objek.<br>
• Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.<br>
### Objek (Object)
• Instansiasi dari kelas.<br>
• Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.

### Contoh coding :
```php
<?php 
// definisi kelas
class mobil {
  //atribut atau properties
  public $merk;
  public $warna;

  public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
  } 

  //metode atau function
  public function deskripsi() {
    return "Mobil ini adalah $this->merk berwarna $this->warna";
  }
}

// instansiasi objek
$mobil1= new mobil("Toyota", "HItam");
echo $mobil1->deskripsi();
?>
```

### Penjelasan:
• Class Mobil: Kelas ini memiliki dua atribut (merk dan warna) dan satu metode (deskripsi). <br>
• Object: $mobil1 adalah objek yang merupakan instance dari kelas Mobil. Metode deskripsi() digunakan untuk menampilkan informasi tentang objek tersebut.
### Hasil
![image](https://github.com/user-attachments/assets/dc77b6d3-1d1b-416b-9560-56516845754d)

## Atribut & Metode
- Atribut: Menyimpan data atau keadaan dari objek. <br>
- Metode: Operasi atau fungsi yang dilakukan oleh objek.

### Contoh coding:
```php
<?php 
// menambah atribut dan metode
class Buku {
  //atribut atau properties
  public $judul;
  public $penulis;

  public function __construct($judul, $penulis) {
    $this->judul = $judul;
    $this->penulis = $penulis;
  } 

  //metode atau function
  public function deskripsi() {
    return "Buku : $this->judul, ditulis oleh $this->penulis";
  }
}

// instansiasi objek
$buku1= new Buku("Pemrograman PHP", "John Doe");
echo $buku1->deskripsi();
?>
```
### Aksesibilitas
• Public: Dapat diakses dari mana saja.<br>
• Private: Hanya dapat diakses dalam kelas itu sendiri.<br>
• Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
### Hasil
![image](https://github.com/user-attachments/assets/0fe2ba05-9867-4380-9102-8b391b427b05)

## Jobsheet 1
### Class & Properties
Mendefinisikan kelas bernama Mahasiswa yang memiliki properties $nama, $nim, $jurusan
```php
class Mahasiswa {
  // properties
  public $nama; //properties untuk menyimpan nama 
  public $nim; //properties untuk menyimpan nim
  public $jurusan; //properties untuk menyimpan nama jurusan
```
### Constructor
Konstruktor ini akan dipanggil secara otomatis untuk menginisialisasi nilai properti $nama, $nim, dan $jurusan dari objek tersebut Saat membuat objek baru dari kelas Mahasiswa
```php
  public function __construct($nama,$nim,$jurusan) {
    $this->nama = $nama; //properties ini akan diisi value dari parameter $nama
    $this->nim = $nim; //properties ini akan diisi value dari parameter $nim
    $this->jurusan = $jurusan; //properties ini akan diisi value dari parameter $jurusan
  }
```

## Method
Method ini digunakan untuk menampilkan data mahasiswa
```php
 public function tampildata() {
   //mengembalikan string berupa data mahasiswa
    return "Nama : $this->nama" . "<br>" . "NIM : $this->nim" . "<br>" . "Jurusan : $this->jurusan" . "<hr>";  
  }
```
Method ini digunakan untuk mengubah nilai properti $jurusan menjadi nilai baru yang diberikan sebagai parameter.
```php
public function updateJurusan($jurusanBaru) {
    //properties ini akan diisi dengan nilai dari parameter $jurusan
    $this->jurusan = $jurusanBaru;
  }
```
Method ini digunakan untuk mengubah nilai properti $nim menjadi nilai baru yang diberikan sebagai parameter.
```php
  public function setNim($nim) {
    //properties ini akan diisi dengan nilai dari parameter $nim
    return $this->nim =$nim; 
  }
```
### Membuat Objek dan Mengaksesnya
Membuat objek baru dari kelas Mahasiswa dengan nama "Eval", nip "230202009" dan jurusan "Komputer dan Bisnis". Objek ini disimpan di dalam variabel $mahasiswa1
```php
$mahasiswa1 = new Mahasiswa("Eval", "230202009", "Komputer dan Bisnis"); //membuat objek baru dari kelas mahasiswa
echo $mahasiswa1->tampildata(); //memamnggil method tampildata dari objek mahasiswa yang dibuat sebagai objek $mahasiswa1 

$mahasiswa1->updateJurusan("Rekayasa Agama"); //memamnggil method updateJurusan dari objek mahasiswa yang dibuat sebagai objek $mahasiswa1
$mahasiswa1->setNim("223344"); //memamnggil method setNim dari objek mahasiswa yang dibuat sebagai objek $mahasiswa1
echo $mahasiswa1->tampildata(); //memamnggil method tampildata dari objek mahasiswa yang dibuat sebagai objek $mahasiswa1
```
### Hasil
![image](https://github.com/user-attachments/assets/c1f745c8-b58c-4d4b-bf82-7a1936f4f11e)


## Tugas
### Class and Properties
```php
// Properties (atribut dari objek)
  public $nama;         // Nama dosen
  public $nip;          // NIP (Nomor Induk Pegawai) dosen
  public $mataKuliah;   // Mata kuliah yang diajarkan dosen
```
Mencdefinisikan kelas bernama Dosen dengan atribut nama, nip dan mata kuliah

### Constructor
```php
 // Constructor untuk menginisialisasi objek Dosen dengan nilai properti
  public function __construct($nama, $nip, $mataKuliah) {
    // Mengatur nilai properti saat objek dibuat
    $this->nama = $nama;
    $this->nip = $nip;
    $this->mataKuliah = $mataKuliah;
```
Membentuk objek Dosen baru dengan inisialisasi nilai untuk nama, NIP, dan mata kuliah.

### Method
```php
 // Method untuk menampilkan data dosen
  public function tampilkanDosen() {
    // Mengembalikan string yang berisi informasi dosen
    return "Nama : $this->nama <br> NIP : $this->nip <br> Mata Kuliah : $this->mataKuliah"; 
  }
```
Mengembalikan string yang berisi informasi lengkap tentang dosen, termasuk nama, NIP, dan mata kuliah.

### Membentuk Objek dan Mengaksesnya
```php
// Instansiasi objek Dosen dengan nama, NIP, dan mata kuliah yang diajarkan
$dosen1 = new Dosen("Eval", "230200209", "Alpro");

// Menampilkan data dosen dengan memanggil method tampilkanDosen()
echo $dosen1->tampilkanDosen();
```

### Hasil
![image](https://github.com/user-attachments/assets/76e3c0bc-4832-4cfa-94c2-65ff8a2cde85)

# Pertemuan 5 dan 6
## Jobsheet 3
```php
<?php 
// Kelas dasar Person yang memiliki properti private $name.
class Person {
  private $name; // Properti private $name.

  // Konstruktor kelas Person (saat ini tidak menerima parameter apapun).
  public function __construct() {

  }

  // Method untuk mendapatkan nilai $name.
  public function getName() {
    return $this->name; // Mengembalikan nilai $name.
  }

  // Method untuk mengatur nilai $name.
  public function setName($name) {
    $this->name = $name; // Mengatur nilai $name.
  }

  // Method untuk mendapatkan peran (role) secara umum.
  public function getRole() {
    return "gw adalah "; // Mengembalikan peran (role)
  }
}

// Kelas Student yang mewarisi dari Person, memiliki properti tambahan $studentID.
class Student extends Person {
  private $studentID; // Properti private $studentID.

  // Konstruktor yang menerima $name dan $studentID, lalu menginisialisasinya.
  public function __construct($name, $studentID) {
    parent::setName($name); // Memanggil setName dari kelas induk (Person).
    $this->studentID = $studentID; // Mengatur $studentID
  }

  // Method untuk mendapatkan nilai $studentID.
  public function getStudentID() {
    return $this->studentID; // Mengembalikan $studentID
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName(); // Mengembalikan $name
  }

  // Method untuk mengatur nilai $name melalui method dari kelas induk.
  public function setName($name) {
    parent::setName($name); // Mengatur $name
  }

  // Method untuk mengatur nilai $studentID.
  public function setStudentID($studentID) {
    $this->studentID = $studentID;  // Mengatur $studentID
  }
}

// Kelas Teacher yang mewarisi dari Person, memiliki properti tambahan $teacherID.
class Teacher extends Person {
  public $teacherID; // Properti public $teacherID.
  
  // Konstruktor yang menerima $nama dan $teacherID, lalu menginisialisasinya.
  public function __construct($nama, $teacherID) {
    parent::setName($nama); // Memanggil setName dari kelas induk.
    $this->teacherID = $teacherID;
  }

  // Method untuk mengatur nilai $teacherID.
  public function setTeacherID($teacherID){
    $this->teacherID = $teacherID; // Mengatur $teacherID
  }

  // Method untuk mendapatkan nilai $teacherID.
  public function getTeacherID() {
    return $this->teacherID; // Mengembalikan $teacherID
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName(); // Mengembalikan $name
  }

  // Method untuk mengatur nilai $name melalui method dari kelas induk.
  public function setName($name) {
    parent::setName($name); // Mengatur $name
  }
}

// Kelas abstrak Course yang berfungsi sebagai template untuk kelas lainnya.
abstract class Course {
  // Method abstrak yang harus diimplementasikan oleh kelas turunan.
  abstract public function getCourseDetail(); // Method yang harus diimplementasikan.
}

// Kelas OnlineCourse yang mengimplementasikan Course.
class OnlineCourse extends Course {
  // Implementasi method getCourseDetail untuk course online.
  public function getCourseDetail() {
    return "course detail online"; // Mengembalikan "course detail online".
  }
}

// Kelas OfflineCourse yang mengimplementasikan Course.
class OfflineCourse extends Course {
  // Implementasi method getCourseDetail untuk course offline.
  public function getCourseDetail() {
    return "course detail offline"; // Mengembalikan "course detail offline".
  }
}

// Kelas Dosen yang mewarisi dari Person, memiliki properti tambahan $nidn.
class Dosen extends Person { 
  private $nidn; // Properti private $nidn.

  // Konstruktor yang menerima $name dan $nidn, lalu menginisialisasinya.
  public function __construct($name, $nidn) {
    parent::setName($name); // Memanggil setName dari kelas induk.
    $this->nidn = $nidn; // Mengatur $nidn
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName(); // Mengembalikan $name
  }

  // Method untuk mengatur nilai $name melalui method dari kelas induk.
  public function setName($name) {
    parent::setName($name); // Mengatur $name
  }

  // Method untuk mengatur nilai $nidn.
  public function setNidn($nidn) {
    $this->nidn = $nidn; // Mengatur $nidn
  }

  // Method untuk mendapatkan nilai $nidn.
  public function getNidn() {
    return $this->nidn; // Mengembalikan $nidn
  }

  // Method untuk mendapatkan role khusus untuk dosen.
  public function getRole() {
    return "gw adalah dosen"; // Mengembalikan "gw adalah dosen"
  }
}

// Kelas Mahasiswa yang mewarisi dari Person, memiliki properti tambahan $nim.
class Mahasiswa extends Person {
  private $nim; // Properti private $nim.

  // Konstruktor yang menerima $name dan $nim, lalu menginisialisasinya.
  public function __construct($name, $nim) {
    parent::setName($name); // Memanggil setName dari kelas induk.
    $this->nim = $nim; // Mengatur $nim
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName(); // Mengembalikan $name
  }

  // Method untuk mengatur nilai $nim.
  public function setNim($nim) {
    $this->nim = $nim; // Mengatur $nim
  }

  // Method untuk mendapatkan nilai $nim.
  public function getNim() {
    return $this->nim; // Mengembalikan $nim
  }

  // Method untuk mendapatkan role khusus untuk mahasiswa.
  public function getRole() {
    return "gw adalah mahasiswa"; //  Mengembalikan "gw adalah mahasiswa"
  }
}

// Kelas abstrak Jurnal yang berfungsi sebagai template untuk kelas lainnya.
abstract class Jurnal {
  // Method abstrak yang harus diimplementasikan oleh kelas turunan.
  abstract function caraPengajuan(); // Method yang harus diimplementasikan.
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal.
class JurnalDosen extends Jurnal {
  // Implementasi method caraPengajuan khusus untuk jurnal dosen.
  public function caraPengajuan(){
    return "cara pengajuan jurnal dosen"; // Mengembalikan "cara pengajuan jurnal dosen"
  }
} 

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal.
class JurnalMahasiswa extends Jurnal {
  // Implementasi method caraPengajuan khusus untuk jurnal mahasiswa.
  public function caraPengajuan(){
    return "cara pengajuan jurnal mahasiswa"; // Mengembalikan "cara pengajuan jurnal mahasiswa"
  }
}

// Membuat objek Student dan menampilkan informasi.
$student = new Student("Eval", "230202009"); // Memanggil konstruktor
echo $student->getName() . "<br>"; // Memanggil method
echo $student->getStudentID() . "<br>"; 
echo $student->setName("Eval Kece"); 
echo $student->setStudentID("230202010") . "<br>"; 
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br><br>";

// Membuat objek Teacher dan menampilkan informasi.
$teacher = new Teacher("Cahya", "77653"); // Memanggil konstruktor
echo $teacher->getName() . "<br>";  // Memanggil method
echo $teacher->getTeacherID() . "<br>";
echo $teacher->setName("Oura");
echo $teacher->setTeacherID("885774") . "<br>";
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID() . "<br><br>";

// Membuat objek OnlineCourse dan OfflineCourse lalu menampilkan detailnya.
$course = new OnlineCourse();
echo $course->getCourseDetail() . "<br>";

$course = new OfflineCourse();
echo $course->getCourseDetail() . "<br><br>";

// Membuat objek Dosen dan menampilkan informasi.
$dosen = new Dosen("Adi", "12345");
echo $dosen->getName() . "<br>";
echo $dosen->getRole() . "<br>";
echo $dosen->getNidn() . "<br>";
echo $dosen->setNidn("54332") . "<br>";
echo $dosen->setName("Adiansyah") . "<br>";
echo $dosen->getName() . "<br>";
echo $dosen->getRole() . "<br>";
echo $dosen->getNidn() . "<br><br>";

// Membuat objek Mahasiswa dan menampilkan informasi.
$mahasiswa = new Mahasiswa("Eval", "230202009");
echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getRole() . "<br>";
echo $mahasiswa->getNim() . "<br><br>";
$mahasiswa->setName("Eval Kece");
$mahasiswa->setNim("230202010");
echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getRole() . "<br>";
echo $mahasiswa->getNim() . "<br><br>";

// Membuat objek JurnalDosen dan JurnalMahasiswa lalu menampilkan cara pengajuannya.
$jDosen = new JurnalDosen();
echo $jDosen->caraPengajuan() . "<br>";
$jMahasiswa = new JurnalMahasiswa();
echo $jMahasiswa->caraPengajuan() . "<br><br>"; 
?>
```
### Hasil
![image](https://github.com/user-attachments/assets/307631fb-fedd-4baf-8614-fb23bf641839)
