<?php
class hp
{
    public $pemilik;
    public $jenishp;
    public $ukuran_hp;

    public function cetak()
    {
        return "<h2></h2> Pemilik : ".$this->pemilik."<br>Jenis Hp : ".
        $this->jenishp."<br>Ukuran hp : ".$this->ukuran_hp;
    }
}
  $siswa1 = new hp;                                                                     
  $siswa1->pemilik ="agung";
  $siswa1->jenishp="Asus";
  $siswa1->ukuran_hp="65-in";
  echo $siswa1->cetak();

  $siswa1 = new hp;                                                                     
  $siswa1->pemilik ="Gumelar";
  $siswa1->jenishp="esian";
  $siswa1->ukuran_hp="4-in";
  echo $siswa1->cetak();
?>