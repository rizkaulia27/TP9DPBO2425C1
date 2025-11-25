<?php

include_once(__DIR__ . "/KontrakPresenterSirkuit.php");
include_once(__DIR__ . "/../models/TabelSirkuit.php");
include_once(__DIR__ . "/../models/Sirkuit.php");
include_once(__DIR__ . "/../views/ViewSirkuit.php");

class PresenterSirkuit implements KontrakPresenterSirkuit{
    //Model SirkuitQuery untuk operasi database
    private $tabelSirkuit; //Instance dari TabelSirkuit (Model)
    private $viewSirkuit; //Instance dari ViewSirkuit (View)

    //Data list sirkuit
    private $listSirkuit = []; // Menyimpan array objek Sirkuit

    public function __construct($tabelSirkuit, $viewSirkuit){
        $this->tabelSirkuit = $tabelSirkuit;
        $this->viewSirkuit = $viewSirkuit;
        $this->initListSirkuit();
    }

    //Method untuk initialisasi list sirkuit dari database
    public function initListSirkuit(){
        //Dapatkan data sirkuit dari database
        $data = $this->tabelSirkuit->getAllSirkuit();

        //Buat objek Sirkuit dan simpan di listSirkuit
        $this->listSirkuit = [];
        foreach($data as $item){
            $sirkuit = new Sirkuit(
                $item['id'],
                $item['nama'],
                $item['negara'],
                $item['panjang_km'],
                $item['jumlah_tikungan'],
                $item['kapasitas_penonton'],
                $item['tahun_diresmikan'],
            );
            $this->listSirkuit[] = $sirkuit;
        }
    }

    //Method untuk menampilkan daftar sirkuit menggunakan View
    public function tampilkanSirkuit(): string{
        return $this->viewSirkuit->tampilSirkuit($this->listSirkuit);
    }

    //Method untuk menampilkan form
    public function tampilkanFormSirkuit($id = null): string{
        $data = null;
        if($id !== null){
            $data = $this->tabelSirkuit->getSirkuitById($id);
        }
        return $this->viewSirkuit->tampilFormSirkuit($data);
    }

    //Implementasikan metode
    public function tambahSirkuit($nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi): void {
        $this->tabelSirkuit->addSirkuit($nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi);
        $this->initListSirkuit();
    }
    
    public function ubahSirkuit($id, $nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi): void {
        $this->tabelSirkuit->updateSirkuit($id, $nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi);
        $this->initListSirkuit();
    }
    
    public function hapusSirkuit($id): void {
        $this->tabelSirkuit->deleteSirkuit($id);
        $this->initListSirkuit();
    }
}

?>