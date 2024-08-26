<?php 
class Mahasiswa {
  private $nama;
  private $nim;
  private $jurusan;

  public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }

  public function getNama() {
    return $this->nama;
  }
  public function getNim() {
    return $this->nim;
  }
  public function getJurusan() {
    return $this->jurusan;
  }

  public function setNama($nama) {
    $this->nama = $nama;
  }
  public function setNim($nim) {
    $this->nama = $nim;
  }
  public function setJurusan($jurusan) {
    $this->nama = $jurusan;
  }
}

$mahasiswa1 = new Mahasiswa("Eval", "230202009", "Komputer dan Bisnis");
echo "Nama:" . $mahasiswa1->getNama();
echo"<br>";
echo "NIM:" .$mahasiswa1->getNIm();
echo"<br>";
echo "Jurusan:" .$mahasiswa1->getJurusan();
?>