<?php 
class Pengguna {
  public function aksesFitur() {
    
  }
}

class Dosen extends Pengguna {
  public function aksesFitur() {
   return"Lu adalah Dosen<br>";
  }
}

class Mahasiswa extends Pengguna {
  public function aksesFitur() {
  return"Lu adalah Mahasiswa";
  }
}

$user1 = new pengguna;
$user1->aksesFitur();

$user2 = new Dosen();
echo $user2->aksesFitur();

$user3 = new Mahasiswa();
echo $user3->aksesFitur();
?>