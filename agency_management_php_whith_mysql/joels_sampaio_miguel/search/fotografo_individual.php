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
    header('Location: modelo.php');
    exit;
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
                <p><b>ID:</b> <?php echo $fotografo->getId(); ?></p>
                <h2> <b>Nome:</b> <?php echo $fotografo->getNome(); ?></h2>
                <p> <b>Nacionalidade:</b> <?php echo $fotografo->getNacionalidade(); ?></p>
                <p> <b>Idade</b> <?php echo $fotografo->getIdade(); ?>  </p>
                <p> <b>Morada:</b> <?php echo $fotografo->getMorada(); ?> </p>
                <p> <b>Nif:</b> <?php echo $fotografo->getNif(); ?></p>
                <p> <b>Cod. País:</b> <?php echo $fotografo->getCodPais(); ?></p>
                <p> <b>Telefone:</b> <?php echo $fotografo->getTelemovel(); ?></p>
                <p> <b>Data Inicio:</b> <?php echo $fotografo->getDataInicioAgencia(); ?></p>
                <p> <b>Data Fim:</b> <?php echo $fotografo->getDataFimAgencia(); ?></p>
            </div>

            <div class="agentes">
                <h1>Participou nos trabalhos:</h1>

                <div class="table">
                        <div class="row">
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                            <div class="column">
                            </div>
                        </div>
                        <?php
                        $dados = [
                            'fotografo_trabalho' => [],
                            'fotografo' => [],
                            'trabalho' => [
                                'idtrabalho',
                                'tipo',
                                'datainiciotrabalho',
                                'datafimtrabalho',
                                'localizacao'

                            ]
                        ];
                        $conexoes = ['fotografo.idfotografo = fotografo_trabalho.idfotografo', 'trabalho.idtrabalho = fotografo_trabalho.idtrabalho'];
                        $trabalhos = Trabalho :: pesquisaRelacao($dados, $conexoes, "fotografo_trabalho.idfotografo LIKE '%$pesquisa%'");

                        foreach ($trabalhos as $trabalho){
                            $trabalho = new Trabalho([
                                'idtrabalho' => $trabalho['idtrabalho'],
                                'tipo' => $trabalho['tipo'],
                                'datainiciotrabalho' => $trabalho['datainiciotrabalho'],
                                'datafimtrabalho' => $trabalho['datafimtrabalho'],
                                'localizacao' => $trabalho['localizacao']
                            ]);

                            ?>
                            <div class="row">
                                <div class="column">
                                    <?php echo $trabalho->getIdtrabalho(); ?>
            
                                </div>
                                <div class="column">
                                    <?php echo $trabalho->getTipo(); ?>
                                    
                                </div>
                                <div class="column">
                                    <?php echo $trabalho->getDataInicioTrabalho(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $trabalho->getDataFimTrabalho(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $trabalho->getLocalizacao(); ?>  
                                </div>
                            </div>

                    <?php } ?>
                        
                           
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>