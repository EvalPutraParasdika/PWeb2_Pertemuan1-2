<?php 
class Pengguna {
  public function aksesFitur() {
    echo "Lu adalah pengguna<br>";
  }
}

class Dosen extends Pengguna {
  public function aksesFitur() {
    echo "Lu adalah Dosen<br>";
  }
}

class Mahasiswa extends Pengguna {
  public function aksesFitur() {
    echo "Lu adalah Mahasiswa";
  }
}

$user1 = new pengguna;
$user1->aksesFitur();

$user2 = new Dosen();
$user2->aksesFitur();

$user3 = new Mahasiswa();
$user3->aksesFitur();
?>