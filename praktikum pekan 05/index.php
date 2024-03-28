<?php

class Manusia{

    public $nama;
    public $umur;
   
    public function setNama ($nama)
    {
        $this->nama = $nama;
    }


     public function setUmur ($umur)
     {
        $this-> umur =$umur;
     }
    
     public function getInfo ()
     {
        return "Nama: ". $this->nama . ", Umur :". $this->umur;
     }
}

// Membuat Objek
$wildan = new Manusia ();
$wildan->setNama("rizal");
$wildan->setUmur(19);
echo $wildan->getInfo();

echo "<br>";

$fahdan= new Manusia ();
$fahdan->setNama("zulfa");
$fahdan->setUmur(19);
echo $fahdan->getInfo();
