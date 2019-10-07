<?php
// 1.class adalah sebuah blueprint/template
//untuk membuatinstance dari object
//2.class mendefisikan object
//3.class menyimpan data(property)
//dan prilaku (method)

//membuat class dengan nama kucing

// class kucing 
// {
    //membuat property
    // public $warna = "Coklat";
    // public $jml_kaki = 4;
    // public $mkn_nav = "Sagung";

    //membuat method dengan nama bersuara()
//     public function bersuara()
//     {
//         return "miaww";
//     }
// }
//membuat objek baru
//ditandai dengan keyword new
// $kucing1 = new kucing();
// $kucing->$warna="orange";
// echo "Warna kucing :$warna";
// echo $kucing -> bersuara();

class Perumahan
{
    public $blok;
    public $nomor_rumah;

    public function pemilik(){
        return "Alamat saya di komplek kopo indah Blok " .this -> $blok. "nomor".
    }
}
?>