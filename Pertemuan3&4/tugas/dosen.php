<?php 
//mendefinisikan class
class Dosen {
  //properties
  public $nama;
  public $nip;
  public $mataKuliah;


  public function __construct($nama,$nip,$mataKuliah) {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->mataKuliah = $mataKuliah;
  }

  //method untuk menampilkan data dosen
  public function tampilkanDosen() {
    return "Nama : $this->nama <br> NIP : $this->nip <br> Mata Kuliah : $this->mataKuliah"; 
  }
}

//instansiasi objek dosen
$dosen1 = new Dosen("Eval","230200209","Alpro");
//menampilkan data dosen
echo $dosen1->tampilkanDosen();
?>