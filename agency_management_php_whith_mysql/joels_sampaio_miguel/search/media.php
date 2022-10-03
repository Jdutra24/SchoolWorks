<?php
if(empty($_GET) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: modelo.php');
    exit;
}


require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Agente.php';
require_once '../classes/Media.php';

$pesquisa = $_GET['id'];

$dados = [
    'media' => [
        'idmedia',
        'datamedia',
        'resolucao',
        'idtrabalho',
        'metadados',
        'idfotografo',
    ],
    'trabalho'=>[]
];
$conexoes = ["media.idtrabalho = trabalho.idtrabalho"];


$medias = Media::pesquisaRelacao($dados, $conexoes, "media.idtrabalho = $pesquisa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Procurar media</title>
</head>
<body>
    <nav>   
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
    <h1>
        Media deste trabalho:
    </h1>
        <?php


            foreach($medias as $media ){
                $media = new Media([
                    'idmedia' => $media['idmedia'],
                    'datamedia' => $media['datamedia'],
                    'resolucao' => $media['resolucao'],
                    'idtrabalho' => $media['idtrabalho'],
                    'metadados' => $media['metadados'],
                    'idfotografo' => $media['idfotografo']
                ]);
                ?>
                <div class="media">
                    <?php
                    echo $media->getIdmedia()."<br>";
                    echo $media->getDataMedia()."<br>";
                    echo $media->getResolucao()."<br>";
                    echo $media->getIdtrabalho()."<br>";
                    echo $media->getMetadados()."<br>";
                    echo $media->getIdfotografo()."<br>";
                    ?>
                    <a href="media_delete.php?id=<?=$media->getIdmedia()?>">delete</a>
                </div>

                <?php
            }
        ?>
        <br/>
        
    </form>
</body>
</html>