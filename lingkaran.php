<?php
class lingkaran
{
    public function __construct($jarijari){
        return $this->jari = $jarijari;
    }
    public function menentukan_v(){
        if ($this->jari % 7 == 0){
            $this ->v = 22/7;
        }else{
            $this->v == 3.14;
        }
        return $this->v;
    }
    public function menghitung_keliling(){
        $this->kel = (2*$this->menentukan_v()) * $this->jari;
        return $this->kel;
    }
    public function menghitung_luas(){
        $this->luas = $this->mententukan_v() * $this->jari*$this->jari;
        return $this->luas;
    }
}
$lingkaranaku = new lingkaran(14);

echo "Jari jari lingkaran : $lingkaranku->jari<br>
Keliling lingkaran : " . $lingkaranaku->menghitung_keliling();
"<br>Luas lingkaran : " . $lingkaranaku->menghitung_luas();
?>