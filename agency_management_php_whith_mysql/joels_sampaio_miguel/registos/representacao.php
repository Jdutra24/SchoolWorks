<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Representacao.php';

if(empty($_POST)){
	echo "tem de preencher todos os campos";
}

if (empty($_POST['agente'])){
	echo "tem de escolher um agente";
}
if (empty($_POST['modelo'])){
	echo "tem de escolher um modelo";
}

if (empty($_POST['datainicioagencia'])){
	echo "tem de escolher data"; 
}

$representacao = new Representacao([
	'datainiciorepresentacao'=> $_POST['datainicioagencia'],
	'datafimrepresentacao'=> "",
	'motivofimrepresentacao'=> "",
	'idmodelo'=> $_POST['modelo'],
	'idagente'=> $_POST['agente'],
]);
$representacao-> save();

header("location: ../forms/form_representacao.php");
?>