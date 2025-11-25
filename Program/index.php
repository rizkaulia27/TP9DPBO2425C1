<?php

include_once("models/DB.php");
include("models/TabelPembalap.php");
include("models/TabelSirkuit.php");
include("views/ViewPembalap.php");
include("views/ViewSirkuit.php");
include("presenters/PresenterPembalap.php");
include("presenters/PresenterSirkuit.php");

$tabelPembalap = new TabelPembalap('localhost', 'mvp_db', 'root', '');
$tabelSirkuit = new TabelSirkuit('localhost', 'mvp_db', 'root', '');
$viewPembalap = new ViewPembalap();
$viewSirkuit = new ViewSirkuit();
$presenterPembalap = new PresenterPembalap($tabelPembalap, $viewPembalap);
$presenterSirkuit = new PresenterSirkuit($tabelSirkuit, $viewSirkuit);

if(isset($_GET['screen'])){
    switch($_GET['screen']){
        case 'add':
            echo $presenterPembalap->tampilkanFormPembalap();
            exit();

        case 'edit':
            if(isset($_GET['id'])){
                echo $presenterPembalap->tampilkanFormPembalap($_GET['id']);
                exit();
            }
            break;

        case 'addSirkuit':
            echo $presenterSirkuit->tampilkanFormSirkuit();
            exit();

        case 'editSirkuit':
            if(isset($_GET['id'])){
                echo $presenterSirkuit->tampilkanFormSirkuit($_GET['id']);
                exit();
            }
            break;
    }
}

if(isset($_POST['action'])){
    if($_POST['action'] === 'add'){
        $presenterPembalap->tambahPembalap(
            $_POST['nama'],
            $_POST['tim'],
            $_POST['negara'],
            $_POST['poinMusim'],
            $_POST['jumlahMenang']
        );
    } elseif($_POST['action'] === 'edit'){
        $presenterPembalap->ubahPembalap(
            $_POST['id'],
            $_POST['nama'],
            $_POST['tim'],
            $_POST['negara'],
            $_POST['poinMusim'],
            $_POST['jumlahMenang']
        );
    } elseif($_POST['action'] === 'delete'){
        $presenterPembalap->hapusPembalap(
            $_POST['id']
        );
    }
    header("Location: index.php");
    exit();
}

if(isset($_POST['actionSirkuit'])){
    if($_POST['actionSirkuit'] === 'add'){
        $presenterSirkuit->tambahSirkuit(
            $_POST['nama'],
            $_POST['negara'],
            $_POST['panjang_km'],
            $_POST['jumlah_tikungan'],
            $_POST['kapasitas_penonton'],
            $_POST['tahun_diresmikan']
        );
    } elseif($_POST['actionSirkuit'] === 'edit'){
        $presenterSirkuit->ubahSirkuit(
            $_POST['id'],
            $_POST['nama'],
            $_POST['negara'],
            $_POST['panjang_km'],
            $_POST['jumlah_tikungan'],
            $_POST['kapasitas_penonton'],
            $_POST['tahun_diresmikan']
        );
    } elseif($_POST['actionSirkuit'] === 'delete'){
        $presenterSirkuit->hapusSirkuit(
            $_POST['id']
        );
    }
    header("Location: index.php?screen=sirkuit");
    exit();
}

echo $presenterPembalap->tampilkanPembalap();
echo $presenterSirkuit->tampilkanSirkuit();

?>
