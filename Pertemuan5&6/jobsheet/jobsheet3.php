<?php 
// Kelas dasar Person yang memiliki properti private $name.
class Person {
  private $name;

  // Konstruktor kelas Person (saat ini tidak menerima parameter apapun).
  public function __construct() {

  }

  // Method untuk mendapatkan nilai $name.
  public function getName() {
    return $this->name;
  }

  // Method untuk mengatur nilai $name.
  public function setName($name) {
    $this->name = $name;
  }

  // Method untuk mendapatkan peran (role) secara umum.
  public function getRole() {
    return "gw adalah ";
  }
}

// Kelas Student yang mewarisi dari Person, memiliki properti tambahan $studentID.
class Student extends Person {
  private $studentID;

  // Konstruktor yang menerima $name dan $studentID, lalu menginisialisasinya.
  public function __construct($name, $studentID) {
    parent::setName($name); // Memanggil setName dari kelas induk (Person).
    $this->studentID = $studentID;
  }

  // Method untuk mendapatkan nilai $studentID.
  public function getStudentID() {
    return $this->studentID;
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName();
  }

  // Method untuk mengatur nilai $name melalui method dari kelas induk.
  public function setName($name) {
    parent::setName($name);
  }

  // Method untuk mengatur nilai $studentID.
  public function setStudentID($studentID) {
    $this->studentID = $studentID;
  }
}

// Kelas Teacher yang mewarisi dari Person, memiliki properti tambahan $teacherID.
class Teacher extends Person {
  public $teacherID;
  
  // Konstruktor yang menerima $nama dan $teacherID, lalu menginisialisasinya.
  public function __construct($nama, $teacherID) {
    parent::setName($nama); // Memanggil setName dari kelas induk.
    $this->teacherID = $teacherID;
  }

  // Method untuk mengatur nilai $teacherID.
  public function setTeacherID($teacherID){
    $this->teacherID = $teacherID;
  }

  // Method untuk mendapatkan nilai $teacherID.
  public function getTeacherID() {
    return $this->teacherID;
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName();
  }

  // Method untuk mengatur nilai $name melalui method dari kelas induk.
  public function setName($name) {
    parent::setName($name);
  }
}

// Kelas abstrak Course yang berfungsi sebagai template untuk kelas lainnya.
abstract class Course {
  // Method abstrak yang harus diimplementasikan oleh kelas turunan.
  abstract public function getCourseDetail();
}

// Kelas OnlineCourse yang mengimplementasikan Course.
class OnlineCourse extends Course {
  // Implementasi method getCourseDetail untuk course online.
  public function getCourseDetail() {
    return "course detail online";
  }
}

// Kelas OfflineCourse yang mengimplementasikan Course.
class OfflineCourse extends Course {
  // Implementasi method getCourseDetail untuk course offline.
  public function getCourseDetail() {
    return "course detail offline";
  }
}

// Kelas Dosen yang mewarisi dari Person, memiliki properti tambahan $nidn.
class Dosen extends Person {
  private $nidn;

  // Konstruktor yang menerima $name dan $nidn, lalu menginisialisasinya.
  public function __construct($name, $nidn) {
    parent::setName($name); // Memanggil setName dari kelas induk.
    $this->nidn = $nidn;
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName();
  }

  // Method untuk mengatur nilai $name melalui method dari kelas induk.
  public function setName($name) {
    parent::setName($name);
  }

  // Method untuk mengatur nilai $nidn.
  public function setNidn($nidn) {
    $this->nidn = $nidn;
  }

  // Method untuk mendapatkan nilai $nidn.
  public function getNidn() {
    return $this->nidn;
  }

  // Method untuk mendapatkan role khusus untuk dosen.
  public function getRole() {
    return "gw adalah dosen";
  }
}

// Kelas Mahasiswa yang mewarisi dari Person, memiliki properti tambahan $nim.
class Mahasiswa extends Person {
  private $nim;

  // Konstruktor yang menerima $name dan $nim, lalu menginisialisasinya.
  public function __construct($name, $nim) {
    parent::setName($name); // Memanggil setName dari kelas induk.
    $this->nim = $nim;
  }

  // Method untuk mendapatkan nilai $name dari kelas induk.
  public function getName() {
    return parent::getName();
  }

  // Method untuk mengatur nilai $nim.
  public function setNim($nim) {
    $this->nim = $nim;
  }

  // Method untuk mendapatkan nilai $nim.
  public function getNim() {
    return $this->nim;
  }

  // Method untuk mendapatkan role khusus untuk mahasiswa.
  public function getRole() {
    return "gw adalah mahasiswa";
  }
}

// Kelas abstrak Jurnal yang berfungsi sebagai template untuk kelas lainnya.
abstract class Jurnal {
  // Method abstrak yang harus diimplementasikan oleh kelas turunan.
  abstract function caraPengajuan();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal.
class JurnalDosen extends Jurnal {
  // Implementasi method caraPengajuan khusus untuk jurnal dosen.
  public function caraPengajuan(){
    return "cara pengajuan jurnal dosen";
  }
} 

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal.
class JurnalMahasiswa extends Jurnal {
  // Implementasi method caraPengajuan khusus untuk jurnal mahasiswa.
  public function caraPengajuan(){
    return "cara pengajuan jurnal mahasiswa";
  }
}

// Membuat objek Student dan menampilkan informasi.
$student = new Student("Eval", "230202009");
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";
echo $student->setName("Eval Kece");
echo $student->setStudentID("230202010") . "<br>";
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br><br>";

// Membuat objek Teacher dan menampilkan informasi.
$teacher = new Teacher("Cahya", "77653");
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID() . "<br>";
echo $teacher->setName("Oura");
echo $teacher->setTeacherID("885774") . "<br>";
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID() . "<br><br>";

// Membuat objek OnlineCourse dan OfflineCourse lalu menampilkan detailnya.
$course = new OnlineCourse();
echo $course->getCourseDetail() . "<br>";

$course = new OfflineCourse();
echo $course->getCourseDetail() . "<br><br>";

// Membuat objek Dosen dan menampilkan informasi.
$dosen = new Dosen("Adi", "12345");
echo $dosen->getName() . "<br>";
echo $dosen->getRole() . "<br>";
echo $dosen->getNidn() . "<br>";
echo $dosen->setNidn("54332") . "<br>";
echo $dosen->setName("Adiansyah") . "<br>";
echo $dosen->getName() . "<br>";
echo $dosen->getRole() . "<br>";
echo $dosen->getNidn() . "<br><br>";

// Membuat objek Mahasiswa dan menampilkan informasi.
$mahasiswa = new Mahasiswa("Eval", "230202009");
echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getRole() . "<br>";
echo $mahasiswa->getNim() . "<br><br>";
$mahasiswa->setName("Eval Kece");
$mahasiswa->setNim("230202010");
echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getRole() . "<br>";
echo $mahasiswa->getNim() . "<br><br>";

// Membuat objek JurnalDosen dan JurnalMahasiswa lalu menampilkan cara pengajuannya.
$jDosen = new JurnalDosen();
echo $jDosen->caraPengajuan() . "<br>";
$jMahasiswa = new JurnalMahasiswa();
echo $jMahasiswa->caraPengajuan() . "<br><br>"; 
?>
