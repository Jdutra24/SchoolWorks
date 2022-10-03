<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Modelo.php';
include_once '../classes/Representacao.php';

    if (empty($_POST)) {
        echo "tem de preencher os campos";
        exit;
    }
    if (empty($_POST['nome'])) {
        echo "tem de preencher o nome";
        exit;
    }
    if (empty($_POST['morada'])) {
        echo "tem de preencher a morada";
        exit;
    }
    if (empty($_POST['contacto'])) {
        echo "tem de preencher o contacto";
        exit;
    }
    if (empty($_POST['nif'])) {
        echo "tem de preencher o nif";
        exit;
    }
    if (empty($_POST['genero'])) {
        echo "tem de preencher o genero";
        exit;
    }
    if (empty($_POST['nacionalidade'])) {
        echo "tem de preencher a nacionalidade";
        exit;
    }
    if (empty($_POST['altura'])) {
        echo "tem de preencher a altura";
        exit;
    }
    if (empty($_POST['quadril'])) {
        echo "tem de preencher o quadril";
        exit;
    }
    if (empty($_POST['cintura'])) {
        echo "tem de preencher a cintura";
        exit;
    }
    if (empty($_POST['busto'])) {
        echo "tem de preencher o busto";
        exit;
    }
    if (empty($_POST['datainicioagencia'])) {
        echo "tem de preenvher a data de inicio da agencia";
        exit;
    }
    if (empty($_POST['codpais'])) {
        echo "tem de preencher o codigo dopais";
        exit;
    }

    $genero = array('feminino','masculino','nao defenido');

    if (!in_array($_POST['genero'],$genero)){
        echo "tem de preencher com um valor valido"; 
        exit;
    }
    
    if(!is_numeric($_POST['contacto'])) {
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
    if (!is_numeric($_POST['quadril'])){
        echo " as medidas têm de ser numericas";
        exit;
    }
    if (!is_numeric($_POST['cintura'])){
        echo " as medidas têm de ser numericas";
        exit;
    }
    if (!is_numeric($_POST['busto'])){
        echo " as medidas têm de ser numericas";
        exit;
    }
    if (!is_numeric($_POST['altura'])) {
        echo " a altura tem de ser numericas";
        exit;
    }
    $modelo = new Modelo([
        'nome' => $_POST['nome'],
        'morada' => $_POST['morada'],
        'contacto' => $_POST['contacto'],
        'idade' => $_POST['idade'],
        'nif' => $_POST['nif'],
        'nacionalidade' => $_POST['nacionalidade'],
        'altura' => $_POST['altura'],
        'quadril' => $_POST['quadril'],
        'cintura' => $_POST['cintura'],
        'busto' => $_POST['busto'],
        'genero' => $_POST['genero'],
        'datainicioagencia' => $_POST['datainicioagencia'],
        'codpais' => $_POST['codpais'],
        'telefone' => $_POST['contacto'],
        

    ]);
    
    $modelo->save(); 
    
    $ultimo = $modelo->getLastId()[0];

    $representacao = new Representacao([
        'idmodelo' => $ultimo,
        'idagente' => $_POST['agente'],
        'datainiciorepresentacao' => $_POST['datainicioagencia'],

    ]);
    $representacao->save();

    header("Location: ../forms/form_modelo.php");
?>