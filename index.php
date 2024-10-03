<?php

class Mobil{

    

    public $merk;
    public $model;
    public $tahun;
    public $warna;


    //Method
    public  function start()
    {
        echo 'Mobil dinyalakan';
    }

    public function cek($nama, $ket)
    {
        echo 'Merek:' . $this->merk.'<br>';
        echo 'Model:' . $this->model.'<br>';
        echo 'Warna:' . $this->warna.'<br>';
        echo 'Tahun:' . $this->tahun.'<br>';
        echo 'Pemilik:'. $nama.'<br>';
        echo 'Keterangan:' .$ket.'<br>';
    }


    public  function stop()

    {
        echo 'Mobil dimatikan';
    }


}

class Kendaraan extends Mobil{
    public $jenis;

    public function bergerak()
    {
        echo 'Kendaraan sedang bergerak';
    }
}

// Objek

$kendaraan = new Mobil();
$kendaraan =new Kendaraan();
$kendaraan->merk = 'Avanza';
$kendaraan->model='Nova';
$kendaraan->tahun=2023;
$kendaraan->warna ='putih';


// Panggil method
$ket ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cum nemo voluptatum laboriosam, animi rem nostrum provident delectus omnis incidunt?.';
// Pangil Method

$kendaraan->cek('roys',$ket);
$kendaraan->merk ='BWM';
echo $kendaraan->cek('Roys','');