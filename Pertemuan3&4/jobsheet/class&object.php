<?php 
class Mahasiswa {
  public $nama;
  public $nim;
  public $jurusan;

  public function __construct($nama,$nim,$jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }

  public function tampildata() {
    return "Nama : $this->nama" . "<br>" . "NIM : $this->nim" . "<br>" . "Jurusan : $this->jurusan" . "<hr>";
  }

  public function updateJurusan($jurusanBaru) {
    $this->jurusan = $jurusanBaru;
  }

  public function setNim($nim) {
    return $this->nim =$nim;
  }
}

$mahasiswa1 = new Mahasiswa("Eval", "230202009", "Komputer dan Bisnis");
echo $mahasiswa1->tampildata();

$mahasiswa1->updateJurusan("Rekayasa Agama");
$mahasiswa1->setNim("223344");
echo $mahasiswa1->tampildata();

?>