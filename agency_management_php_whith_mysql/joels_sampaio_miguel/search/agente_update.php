<?php
if(empty($_GET) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: agente.php');
    exit;
}

require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Agente.php';
require_once '../classes/Modelo.php';

$pesquisa = $_GET['id'];

$agentes = Agente :: search(['idagente'],["="],[$pesquisa]);

if(empty($agentes)){
    header('Location: agente.php');
    exit;
}

$agente = $agentes[0];

if(!empty($_POST)){
    $agente->setNome($_POST['nome']);
    $agente->setIdade($_POST['idade']);
    $agente->setNif($_POST['nif']);
    $agente->setNacionalidade($_POST['nacionalidade']);
    $agente->setCodPais($_POST['codpais']);
    $agente->setTelemovel($_POST['telemovel']);
    $agente->setDataFimAgencia($_POST['getdatafimagencia']);

    $agente->update();

    header("Location: agente.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Agente Individual</title>
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
                <form action="agente_update.php?id=<?php echo $pesquisa ?>" method="post">
                    <p> <b>Id:</b>  <?php echo $agente->getId(); ?></p>
                    <h2> <b>Nome:</b> <input type="text" name="nome" value="<?php echo $agente->getNome(); ?>"></h2>
                    <p> <b>Idade:</b> <input type="text" name="idade" value="<?php echo $agente->getIdade(); ?>"></p>
                    <p> <b>Nif:</b> <input type="text" name="nif" value="<?php echo $agente->getNif(); ?>"> </p>
                    <p> <b>Data Inicio:</b> <?php echo $agente->getDataInicioAgencia(); ?>  </p>
                    <p> <b>Data Fim:</b> <input type="date" name="getdatafimagencia" value="<?php echo $agente->getDataFimAgencia(); ?>">  </p>
                    <p> <b>Nacionalidade:</b> <input type="text" name="nacionalidade" value="<?php echo $agente->getNacionalidade(); ?>"></p>
                    <p> <b>Cod. Pais:</b> <input type="text" name="codpais" value="<?php echo $agente->getCodPais(); ?>"> </p>
                    <p> <b>Telemovel:</b> <input type="text" name="telemovel" value="<?php echo $agente->getTelemovel(); ?>"></p>
                    <input type="submit" value="Atualizar">
                </form>
            </div>
    </div>
</body>
</html>