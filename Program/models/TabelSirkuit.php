<?php

include_once ("models/DB.php");
include_once ("KontrakModelSirkuit.php");

class TabelSirkuit extends DB implements KontrakModelSirkuit{
    //Konstruktor untuk inisialisasi database
    public function __construct($host, $db_name, $username, $password){
        parent::__construct($host, $db_name, $username, $password);
    }

    //Method untuk mendapatkan semua sirkuit
    public function getAllSirkuit(): array{
        $query = "SELECT * FROM sirkuit";
        $this->executeQuery($query);
        return $this->getAllResult();
    }

    //Method untuk mendapatkan sirkuit berdasarkan ID
    public function getSirkuitById($id): ?array{
        $this->executeQuery("SELECT * FROM sirkuit WHERE id = :id", ['id' => $id]);
        $results = $this->getAllResult();
        return $results[0] ?? null;
    }

    //Implementasikan metode CRUD di bawah ini sesuai kebutuhan
    public function addSirkuit($nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi): void{
        $query = "INSERT INTO sirkuit (nama, panjang_km, negara, jumlah_tikungan, kapasitas_penonton, tahun_diresmikan)
                  VALUES (:nama, :panjang_km, :negara, :jumlah_tikungan, :kapasitas_penonton, :tahun_diresmikan)";

        $params = [
            'nama' => $nama,
            'negara' => $negara,
            'panjang_km' => $panjang,
            'jumlah_tikungan' => $jumlahTikungan,
            'kapasitas_penonton' => $kapasitas,
            'tahun_diresmikan' => $tahunResmi
        ];

        $this->executeQuery($query, $params);
    }
    
    public function updateSirkuit($id, $nama, $negara, $panjang, $jumlahTikungan, $kapasitas, $tahunResmi): void{
        $query = "UPDATE sirkuit 
                  SET nama = :nama, 
                      negara = :negara,
                      panjang_km = :panjang_km, 
                      jumlah_tikungan = :jumlah_tikungan,
                      kapasitas_penonton = :kapasitas_penonton,
                      tahun_diresmikan = :tahun_diresmikan
                  WHERE id = :id";

        $params = [
            'id' => $id,
            'nama' => $nama,
            'negara' => $negara,
            'panjang_km' => $panjang,
            'jumlah_tikungan' => $jumlahTikungan,
            'kapasitas_penonton' => $kapasitas,
            'tahun_diresmikan' => $tahunResmi
        ];

        $this->executeQuery($query, $params);
    }
    
    public function deleteSirkuit($id): void{
        $query = "DELETE FROM sirkuit WHERE id = :id";
        $this->executeQuery($query, ['id' => $id]);
    }
}

?>