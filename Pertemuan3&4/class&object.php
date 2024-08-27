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