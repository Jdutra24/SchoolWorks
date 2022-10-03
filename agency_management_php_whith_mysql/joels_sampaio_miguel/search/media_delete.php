<?php
if(empty($_GET) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: trabalho.php');
    exit;
}

require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Media.php';

$id = $_GET['id'];

Media::delete($id);

header('Location: trabalhos.php');