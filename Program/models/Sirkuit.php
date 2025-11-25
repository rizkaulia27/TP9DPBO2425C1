<?php

class Sirkuit{
    private $id;
    private $nama;
    private $negara;
    private $panjang;
    private $jumlahTikungan;
    private $kapasitas;
    private $tahunResmi;

    public function __construct($id, $nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi){
        $this->id = $id;
        $this->nama = $nama;
        $this->negara = $negara;
        $this->panjang = $panjang;
        $this->jumlahTikungan = $jumlahTikungan;
        $this->kapasitas = $kapasitas;
        $this->tahunResmi = $tahunResmi;
    }

    public function getId(){
        return $this->id;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getNegara(){
        return $this->negara;
    }

    public function getPanjang(){
        return $this->panjang;
    }

    public function getJumlahTikungan(){
        return $this->jumlahTikungan;
    }

    public function getTahunResmi(){
        return $this->tahunResmi;
    }

    public function getKapasitas(){
        return $this->kapasitas;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setNegara($negara){
        $this->negara = $negara;
    }

    public function setPanjang($panjang){
        $this->panjang = $panjang;
    }

    public function setJumlahTikungan($jumlahTikungan){
        $this->jumlahTikungan = $jumlahTikungan;
    }

    public function setKapasitas($kapasitas){
        $this->kapasitas = $kapasitas;
    }

    public function setTahunResmi($tahunResmi){
        $this->tahunResmi = $tahunResmi;
    }
}
?>