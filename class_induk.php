m<?php
class induk {
    var $panjang;
    var $lebar;
   
    //method//
     function luasPersegi(){
        $hasil=$this->panjang*$this->lebar;
        return $hasil;
}
}
class anak extends induk{
    var $tinggi;
    //method//
    function volumeBalok(){
        $hasil=$this->panjang*$this->lebar*$this->tinggi;
        return $hasil;
    }


}

// buat objek 
$anak = new anak;
// properti
$anak->panjang=40;
$anak->lebar=6;
$anak->tinggi=7;
// tampilkan
echo"hasil dari method class induk";
echo"<br/>";
echo"luasPersegi= ".$anak->luasPersegi();
echo"<br/>";
echo"hasil dari method class anak";
echo"<br/>";
echo"volumeBalok= ".$anak->volumeBalok();
?>