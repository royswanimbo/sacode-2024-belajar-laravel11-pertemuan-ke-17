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
        echo 'Pemilik'. $nama.'<br>';
        echo 'Keterangan:' .$ket.'<br>';
    }


    public  function stop()

    {
        echo 'Mobil dimatikan';
    }


}

// Objek

$mobil = new Mobil();
$mobil->merk = 'Avanza';
$mobil->model='Nova';
$mobil->tahun=2023;
$mobil->warna ='putih';


// mmm
$ket ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cum nemo voluptatum laboriosam, animi rem nostrum provident delectus omnis incidunt?.';
// Pangil Method

$mobil->cek('roys',$ket);