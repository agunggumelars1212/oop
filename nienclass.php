<?php
class rpl2
{
    public $nama;
    public $jk;
    public $hobby;
    public $citacita;
    public $alamat;

    public function cetak()
    {
        return "<h2>MYBIODATA</h2> nama : ".$this->nama."<br>jenis kelamin : ".$this->jk."<br>hobby : ".$this->hobby."<br>Cita-cita : ".$this->citacita."<br>Alamat : ".$this->alamat;
       
        return $biodata;
    }
}
  $siswa1 = new rpl2;                                                                     
  $siswa1->nama ="tono";
  $siswa1->jk="laki-laki";
  $siswa1->hobby="mainbola";
  $siswa1->citacita="polisi";
  $siswa1->alamat="kamboja";
  echo $siswa1->cetak();

  $siswa1 = new rpl2;
  $siswa1->nama ="ardi";
  $siswa1->jk="laki-laki";
  $siswa1->hobby="mainbola";
  $siswa1->citacita="polisi";
  $siswa1->alamat="kamboja";
  echo $siswa1->cetak();

  $siswa1 = new rpl2;
  $siswa1->nama ="jono";
  $siswa1->jk="laki-laki";
  $siswa1->hobby="mainbola";
  $siswa1->citacita="polisi";
  $siswa1->alamat="kamboja";
  echo $siswa1->cetak();

?>