<?php 
//definisi class
class Buku {
  //atribut atau properties
  public $judul;
  public $penulis;

  //constructor
  public function __construct($judul,$penulis) {
    $this->judul = $judul;
    $this->penulis = $penulis;
  }

  public function getJudul() {
    return $this->judul;
  }

  public function setJudul($judul) {
    $this->judul = $judul;
  }
}

$buku1 = new buku ("Pemrograman PHP", "Andi Prasetyo");
echo $buku1-> getJudul() 
?>