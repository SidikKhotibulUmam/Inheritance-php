<?php

class datamahasiswa{
    #private hanya bisa diakses di dalam class tersebut atau tidak bisa diturunkan ke kelas turunan
    private $nama = "Ujang";
    private $nim = 22222222;
    protected $umur = 22;
    protected $alamat = "Lumajang";
    
    private function dataawal(){
        echo "<br>Nama : " .$this->nama. "<br>";
        echo "Nim :" .$this->nim. "<br>";
        echo "Umur :" .$this->umur. "<br>";
        echo "Alamat :" .$this->alamat. "<br>";

    }
    #protected bisa diturunkan ke kelas turunannya
    protected function identitas(){
        $this->dataawal();
    }

}

#inheritance menggunakan extends
class tampilkan_data extends datamahasiswa{

    private function infodata(){
        $this->identitas();
    }

    public function infodata2(){
        $this->infodata();
    }


}

class barusan extends tampilkan_data{
    public function infodatadiri(){
        $this->infodata2();
    }
}



#kelas turunan
$pencari = new tampilkan_data;
$pencari->infodata2();

$pencari = new barusan;
$pencari->infodatadiri();



?>