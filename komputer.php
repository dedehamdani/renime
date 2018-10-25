<?php
class komputer{
    public $merk;
    public $processor;
    public $memory;
    public $vga;
    public $os;
   

    function beliKomputer(){
        return $beli_komputer;
    }
} 

    class laptop extends komputer{
        function pilihSpec(){
            return "MERK : $this->merk ,  PROCESSOR : $this->processor,   MEMORY : $this->memory,   VGA  :$this->vga,  OS  :$this->os";
        }

    }
    $laptop_baru = new laptop;
    $laptop_baru->merk="Samsung";
    $laptop_baru->processor=" Nvidia";
    $laptop_baru->memory="1 Terabyte";
    $laptop_baru->vga="Ryzen";
    $laptop_baru->os="Windwos 10";

    
    echo"beli laptop baru";
    echo"<br/>";
    echo"spesifikasi laptop";
    echo"<br/>". $laptop_baru->pilihSpec();
    echo"<br/>";
    ?>
    


    