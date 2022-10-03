<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Trabalho.php';

    if(empty($_POST )){
        echo "tem de preencher os campos";
        exit;
    }
    if(empty($_POST['tipo'])){
        echo "tem de expecificar o tipo de trabalho";
        exit;
    }
    if(empty($_POST['datainiciotrabalho'])){
        echo "tem de expecificcar a data de inicio do trabalho";
        exit;
    }
    if(empty($_POST['datafimtrabalho'])){
        echo "tem de expecificar a data de fim do trabalho";
        exit;
    }
    if(empty($_POST['localizacao'])){
        echo "tem de expecificar a localizacao";
        exit;
    }

    if (!is_string($_POST['tipo'])){
        echo "o tipo tem de ser explicito no formato de string";
        exit;
    }
    if (!is_string($_POST['datainiciotrabalho'])){
        echo "o tipo tem de ser explicito no formato de string";
        exit;
    }
    if (!is_string($_POST['datafimtrabalho'])){
        echo "o tipo tem de ser explicito no formato de string";
        exit;
    }
    if (!is_string($_POST['localizacao'])){
        echo "o tipo tem de ser explicito no formato de string";
        exit;
    }


    $trabalho = new Trabalho([
        'tipo' => $_POST['tipo'],
        'datainiciotrabalho' => $_POST['datainiciotrabalho'],
        'datafimtrabalho' => $_POST['datafimtrabalho'],
        'localizacao' => $_POST['localizacao'],
    ]);

    $trabalho->save();

    header("Location: ../forms/form_trabalhos.php");