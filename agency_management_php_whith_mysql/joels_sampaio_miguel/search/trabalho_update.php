<?php
if(empty($_GET) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: trabalho.php');
    exit;
}

require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Trabalho.php';
require_once '../classes/Modelo.php';

$pesquisa = $_GET['id'];

$trabalho = Trabalho :: get($pesquisa);

if(empty($trabalho)){
    header('Location: trabalho.php');
    exit;
}

if(!empty($_POST)){

    $trabalho->setIdtrabalho($_POST['idtrabalho']);
    $trabalho->setTipo($_POST['tipo']);
    $trabalho->setDatainiciotrabalho($_POST['datainiciotrabalho']);
    $trabalho->setDatafimtrabalho($_POST['datafimtrabalho']);
    $trabalho->setLocalizacao($_POST['localizacao']);

    $trabalho->update();

    header("Location: trabalhos.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Modelo Individual</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <div class="dados">
                <form action="trabalho_update.php?id=<?php echo $pesquisa ?>" method="post">
                    <p> <b>ID:</b> <input type="text" name="idtrabalho" value="<?php echo $trabalho->getIdtrabalho(); ?>"> </p>
                    <p> <b>Tipo:</b> <input type="text" name="tipo" value="<?php echo $trabalho->getTipo(); ?>"> </p>
                    <p> <b>Data Inicio Trabalho:</b> <input type="date" name="datainiciotrabalho" value="<?php echo $trabalho->getDataInicioTrabalho(); ?>"> </p>
                    <p> <b>Data Fim Trabalho:</b> <input type="date" name="datafimtrabalho" value="<?php echo $trabalho->getDataFimTrabalho(); ?>"> </p>
                    <p> <b>Localizacao:</b> <input type="text" name="localizacao" value="<?php echo $trabalho->getLocalizacao(); ?>"> </p>
                    <input type="submit" value="Atualizar">
                </form>
            </div>
    </div>
</body>
</html>