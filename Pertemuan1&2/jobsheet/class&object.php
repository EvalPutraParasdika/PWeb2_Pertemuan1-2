<?php 
class Mahasiswa {
  public $nama;
  public $nim;
  public $jurusan;
  
  public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }

  //metode atau function
  public function tampilkanData() {
    return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
  }
}

$mahasiswa1 = new Mahasiswa("Eval", "230202009", "Jurusan Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>