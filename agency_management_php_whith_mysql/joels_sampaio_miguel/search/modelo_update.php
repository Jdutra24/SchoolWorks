<?php
if(empty($_GET) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: modelo.php');
    exit;
}

require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Agente.php';
require_once '../classes/Modelo.php';

$pesquisa = $_GET['id'];

$modelo = Modelo :: get($pesquisa);

if(empty($modelo)){
    header('Location: modelo.php');
    exit;
}

if(!empty($_POST)){

    $modelo->setNome($_POST['nome']);
    $modelo->setNacionalidade($_POST['nacionalidade']);
    $modelo->setGenero($_POST['genero']);
    $modelo->setIdade($_POST['idade']);
    $modelo->setMorada($_POST['morada']);
    $modelo->setQuadril($_POST['quadril']);
    $modelo->setBusto($_POST['busto']);
    $modelo->setCintura($_POST['cintura']);
    $modelo->setAltura($_POST['altura']);
    $modelo->setNif($_POST['nif']);
    $modelo->setCodPais($_POST['codpais']);
    $modelo->setTelefone($_POST['telefone']);
    $modelo->setDataInicioAgencia($_POST['datainicioagencia']);
    $modelo->setDataFimAgencia($_POST['datafimagencia']);

    $modelo->update();

    header("Location: modelo.php");
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
                <form action="modelo_update.php?id=<?php echo $pesquisa ?>" method="post">
                    <p><b>ID:</b> <?php echo $modelo->getIdModelo(); ?></p>
                    <h2> <b>Nome:</b> <input type="text" name="nome" value="<?php echo $modelo->getNome(); ?>"> </h2>
                    <p> <b>Nacionalidade:</b> <input type="text" name="nacionalidade" value="<?php echo $modelo->getNacionalidade(); ?>"> </p>
                    <p> <b>Genero:</b> <input type="text" name="genero" value="<?php echo $modelo->getGenero(); ?>"> </p>
                    <p> <b>Idade Inicio:</b>   <input type="text" name="idade" value="<?php echo $modelo->getIdade(); ?>"> </p>
                    <p> <b>Morada:</b>  <input type="text" name="morada" value="<?php echo $modelo->getMorada(); ?>"> </p>
                    <p> <b>Quadril. Pais:</b>  <input type="text" name="quadril" value="<?php echo $modelo->getQuadril(); ?>"> </p>
                    <p> <b>Busto:</b> <input type="text" name="busto" value="<?php echo $modelo->getBusto(); ?>"> </p>
                    <p> <b>Cintura:</b> <input type="text" name="cintura" value="<?php echo $modelo->getCintura(); ?>"> </p>
                    <p> <b>Altura:</b> <input type="text" name="altura" value="<?php echo $modelo->getAltura(); ?>"> </p>
                    <p> <b>Nif:</b> <input type="text" name="nif" value="<?php echo $modelo->getNif(); ?>"> </p>
                    <p> <b>Cod. País:</b> <input type="text" name="codpais" value="<?php echo $modelo->getCodPais(); ?>"> </p>
                    <p> <b>Telefone:</b> <input type="text" name="telefone" value="<?php echo $modelo->getTelefone(); ?>"> </p>
                    <p> <b>Data Inicio:</b> <input type="date" name="datainicioagencia" value="<?php echo $modelo->getDataInicioAgencia(); ?>"> </p>
                    <p> <b>Data Fim:</b> <input type="date" name="datafimagencia" value="<?php echo $modelo->getDataFimAgencia(); ?>"> </p>
                    <input type="submit" value="Atualizar">
                </form>
            </div>
    </div>
</body>
</html>