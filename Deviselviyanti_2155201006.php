<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;

  // Methods
  function set_nama($Name) {
    $this->Nama = $Name;
  }
  function get_nama() {
    return $this->Nama;
  }
  function set_nim($NIM) {
    $this->NIM = $NIM;
  }
  function get_nim() {
    return $this->NIM;
  }
  function set_matkul($Mata_Kuliah) {
    $this->Mata_Kuliah = $Mata_Kuliah;
  }
  function get_matkul() {
    return $this->Mata_Kuliah;
  }
  function set_dokil($Dosen_Killer) {
    $this->Dosen_Killer = $Dosen_Killer;
  }
  function get_dokil() {
    return $this->Dosen_Killer;
  }
}

$selvi = new Mahasiswa();
$selvi->set_nama('Devi Selvi Yanti');
echo $selvi->get_nama();
$selvi->set_nim('2155201006');
echo $selvi->get_nim();
$selvi->set_matkul('program berorientasi objek');
echo $selvi->get_matkul();
$selvi->set_dokil('bapak arif mudi priyatno');
echo $selvi->get_dokil();
?>