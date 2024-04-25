<?php

class Lingkaran {
 //Property / variable
 private $jari;
 const PHI =3,14;

 //Method /function
 function __construct($r){
 $this->jari = $r;


}
 function getluas (){
    riturn self::PHI * $this->jari;
 }



}
//intance objek
$lingkaran1 = new lingkaran(10);
echo 'Luas Lingkaran1 = ' . $lingkaran1->getLuas();
echo '<br>keliling Lingkaran1 = ' .$lingkaran1->getkeliling();
  


