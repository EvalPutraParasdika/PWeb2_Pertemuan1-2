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