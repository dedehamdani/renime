<?php
class orang{
    
    public $nama="nama",
           $jeniskelamin="jeniskelamin",
           $pekerjaan="pekerjaan",
           $status="status",
           $tgllahir=0,
           $umur=0;

           public function getdata(){
            return  "$this->nama,$this->jeniskelamin,$this->umur,$this->tgllahir";
           }


}
$orang1 = new orang();
$orang1->nama="rezha";
$orang1->jeniskelamin="lakilaki";
$orang1->status="pelajar";
$orang1->pekerjaan="pelajar";
$orang1->tgllahir="08 09 2000";
$orang1->umur="18";

echo "data: $orang1->nama,$orang1->jeniskelamin,$orang1->status,$orang1->pekerjaan,$orang1->tgllahir,$orang1->umur,";
echo $orang1->getdata();
?>




