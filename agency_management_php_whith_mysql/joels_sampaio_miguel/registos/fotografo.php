<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Fotografo.php';

    if (empty($_POST)) {
        echo "tem de preencher os campos";
        exit;
    }
    if (empty($_POST['nome'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['idade'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['nacionalidade'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['codpais'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['telemovel'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['nif'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['morada'])) {
        echo "tem de preencher todos os campos";
        exit;
    }
    if (empty($_POST['datainicioagencia'])) {
        echo "tem de preencher todos os campos";
        exit;
    }

    
    if(!is_numeric($_POST['telemovel'])) {
        echo "tem de preencher um numero de telemovel valido";
        exit;
    }
    if(strlen($_POST['nif']) !== 9){
        echo " o nif tem de conter 9 caracteres";
        exit;
    }
    if (!is_numeric($_POST['nif'])){
        echo "o nif tem de conter apenas numero";
        exit;
    }


    $fotografo = new Fotografo([
        'nome' => $_POST['nome'],
        'idade' => $_POST['idade'],
        'nacionalidade' => $_POST['nacionalidade'],
        'codpais' => $_POST['codpais'],
        'telemovel' => $_POST['telemovel'],
        'nif' => $_POST['nif'],
        'morada' => $_POST['morada'],
        'datainicioagencia' => $_POST['datainicioagencia'],
        'datafimagencia' => $_POST['datafimagencia']
    ]);

    $fotografo -> save();

    header("location: ../forms/form_fotografo.php");
?>