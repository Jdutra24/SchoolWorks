<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Agente.php';

    if (empty($_POST)) {
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['nome'])){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['idade'])){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['nif'])){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['datainicioagencia'])){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['nacionalidade'])){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['codpais'])){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['telemovel'])){
        echo "tem de preencher os campos";
        exit;
    }

    if(!is_numeric($_POST['telemovel'])){
        echo "tem de preencher o telemovel com apenas valores numericos";
        exit;
    }
    if(!strlen($_POST['telemovel'])==9){
        echo "tem de preencher o telemovel com no maximo 9 valores";
        exit;
    }
    if (!is_numeric($_POST['idade'])){
        echo "a idade tem de ser numerica";
        exit;
    }

    $agente = new Agente([
        'nome' => $_POST['nome'],
        'idade' => $_POST['idade'],
        'nif' => $_POST['nif'],
        'datainicioagencia' => $_POST['datainicioagencia'],
        'datafimagencia' => $_POST['datafimagencia'],
        'nacionalidade' => $_POST['nacionalidade'],
        'codpais' => $_POST['codpais'],
        'telemovel' => $_POST['telemovel'],
    ]);
    $agente->save();

    header("Location: ../forms/form_agente.php")
?>