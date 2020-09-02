<?php
class manusia{
public $nama;
public $asalSekolah;
   function __construct($n="aku",$ak="oxford"){
   $this->nama=$n;
   $this->asalSekolah=$ak;
   }
function ala(){
echo "hi ".$this->nama;
  if($this->asalSekolah = "wikrama"){
  echo "\nwikrama \n Untuk Indonesia!";
    }
  }
}
$manusia1 = new manusia("ilham","wikrama");
$manusia1->ala();
//compiled in php cli compiler
?>