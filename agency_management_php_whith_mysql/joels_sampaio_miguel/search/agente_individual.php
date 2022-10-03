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

$agente = Agente :: get($pesquisa);

if(empty($agente)){
    header('Location: agente.php');
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
                <p><b>Id:</b> <?php echo $agente->getId(); ?></p>
                <h2> <b>Nome:</b> <?php echo $agente->getNome(); ?></h2>
                <p> <b>Idade:</b> <?php echo $agente->getIdade(); ?></p>
                <p> <b>Nif:</b> <?php echo $agente->getNif(); ?>  </p>
                <p> <b>Data Inicio:</b> <?php echo $agente->getDataInicioAgencia(); ?>  </p>
                <p> <b>Nacionalidade:</b> <?php echo $agente->getNacionalidade(); ?> </p>
                <p> <b>Cod. Pais:</b> <?php echo $agente->getCodPais(); ?> </p>
                <p> <b>Telemovel:</b> <?php echo $agente->getTelemovel(); ?></p>
            </div>

            <div class="modelos">
                <h1>Representa os modelos:</h1>

                <div class="table">
                        <div class="row">
                            <div class="column">
                                ID
                            </div>
                            <div class="column">
                                Nome
                            </div>
                            <div class="column">
                                Nacionalidade
                            </div>
                            <div class="column">
                                Genero
                            </div>
                            <div class="column">
                                Idade
                            </div>
                            <div class="column">
                                Morada
                            </div>
                            <div class="column">
                                Quadril
                            </div>
                            <div class="column">
                                Busto
                            </div>
                            <div class="column">
                                Cintura
                            </div>
                            <div class="column">
                                Altura
                            </div>
                            <div class="column">
                                Nif
                            </div>
                            <div class="column">
                                Cod. País
                            </div>
                            <div class="column">
                                Telefone
                            </div>
                            <div class="column">
                                Data Inicio
                            </div>
                            <div class="column">
                                Data Fim
                            </div>
                        </div>
                        <?php
                            $dados = [
                                'representacao' => [
                                    'idagente'
                                ],
                                'modelo' => [
                                    'idmodelo',
                                    'nome',
                                    'nacionalidade',
                                    'genero',
                                    'idade',
                                    'morada',
                                    'quadril',
                                    'busto',
                                    'cintura',
                                    'altura',
                                    'nif',
                                    'codpais',
                                    'telefone',
                                    'datainicioagencia',
                                    'datafimagencia'
                                ],
                                'agente' => []
                            ];
                            $conexoes = ['representacao.idmodelo = modelo.idmodelo', 'representacao.idagente = agente.idagente'];
                            $modelos = Modelo :: pesquisaRelacao($dados, $conexoes, "representacao.idagente LIKE '%$pesquisa%'");
                
                            foreach ($modelos as $modelo){ ?>

                            <div class="row">
                                <div class="column">
                                    <?php echo $modelo['idmodelo']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['nome']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['nacionalidade']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['genero']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['idade']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['morada']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['quadril']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['busto']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['cintura']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['altura']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['nif']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['codpais']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['telefone']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['datainicioagencia']?>
                                </div>
                                <div class="column">
                                    <?php echo $modelo['datafimagencia']?>
                                </div>
                            </div>
                            <?php } ?>

                </div>
            </div>
        </div>
        
    </div>
</body>
</html>