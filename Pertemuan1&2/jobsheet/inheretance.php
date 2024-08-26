<?php 
class Pengguna {
protected $nama;

public function __construct($nama) {
  $this->nama = $nama;
}

public function getNama() {
  return $this->nama;
}
}

class Dosen extends Pengguna {
  private $mataKuliah;

  public function __construct($nama, $mataKuliah) {
    parent::__construct($nama);
    $this->mataKuliah = $mataKuliah;
  }

  public function getMataKuliah() {
    return $this->mataKuliah;
  }
}

$dosen1 = new Dosen("Eval Kece", "Alpro");
echo "Nama : " . $dosen1->getNama();
echo "<br>";
echo "Mata Kuliah : " . $dosen1->getMataKuliah();
?>