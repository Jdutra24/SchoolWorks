<?php
if(empty($_GET) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: fotografo.php');
    exit;
}

require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Fotografo.php';
require_once '../classes/Trabalho.php';

$pesquisa = $_GET['id'];

$fotografo = Fotografo :: get($pesquisa);

if(empty($fotografo)){
    header('Location: fotografo.php');
    exit;
}

if(!empty($_POST)){
    $fotografo->setNome($_POST['nome']);
    $fotografo->setNacionalidade($_POST['nacionalidade']);
    $fotografo->setIdade($_POST['idade']);
    $fotografo->setMorada($_POST['morada']);
    $fotografo->setNif($_POST['nif']);
    $fotografo->setCodPais($_POST['codpais']);
    $fotografo->setTelemovel($_POST['telefone']);
    $fotografo->setDataInicioAgencia($_POST['datainicioagencia']);
    $fotografo->setDataFimAgencia($_POST['datafimagencia']);


    $fotografo->update();

    header("Location: fotografo.php");
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
                <form action="fotografo_update.php?id=<?php echo $pesquisa ?>" method="post">
                    <p><b>ID:</b> <?php echo $fotografo->getId(); ?></p>
                    <h2> <b>Nome:</b> <input type="text" name="nome" value="<?php echo $fotografo->getNome(); ?>"> </h2>
                    <p> <b>Nacionalidade:</b> <input type="text" name="nacionalidade" value="<?php echo $fotografo->getNacionalidade(); ?>"> </p>
                    <p> <b>Idade: </b>   <input type="text" name="idade" value="<?php echo $fotografo->getIdade(); ?>"> </p>
                    <p> <b>Morada:</b>  <input type="text" name="morada" value="<?php echo $fotografo->getMorada(); ?>"> </p>
                    <p> <b>Nif:</b> <input type="text" name="nif" value="<?php echo $fotografo->getNif(); ?>"> </p>
                    <p> <b>Cod. País:</b> <input type="text" name="codpais" value="<?php echo $fotografo->getCodPais(); ?>"> </p>
                    <p> <b>Telefone:</b> <input type="text" name="telefone" value="<?php echo $fotografo->getTelemovel(); ?>"> </p>
                    <p> <b>Data Inicio:</b> <input type="date" name="datainicioagencia" value="<?php echo $fotografo->getDataInicioAgencia(); ?>"> </p>
                    <p> <b>Data Fim:</b> <input type="date" name="datafimagencia" value="<?php echo $fotografo->getDataFimAgencia(); ?>"> </p>
                    <input type="submit" value="Atualizar">
                </form>
            </div>
    </div>
</body>
</html>