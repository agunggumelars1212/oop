<?php
// buat class komputer
class manusia {
   public function __construct() {
     echo "Agung sedang main kendang (construktor) <br />";
   }
  
   public function __destruct() {
     echo "Agung sedang main gamelan (destruktor) <br />";
   }
}
  
// turunkan class komputer ke laptop
class jelema extends manusia {
   public function __construct() {
     parent::__construct();
     echo "Agung sedang main kendang (construktor) <br />";
}
  
   public function __destruct() {
     echo "Agung sedang main gamelan (destruktor) <br />";
     parent::__destruct();
   }
}
   

$gadget_baru = new jelema();
  
echo "Belajar OOP PHP <br />";
?>
