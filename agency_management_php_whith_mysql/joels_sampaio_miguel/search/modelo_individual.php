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
                <p><b>ID:</b> <?php echo $modelo->getIdModelo(); ?></p>
                <h2> <b>Nome:</b> <?php echo $modelo->getNome(); ?></h2>
                <p> <b>Nacionalidade:</b> <?php echo $modelo->getNacionalidade(); ?></p>
                <p> <b>Genero:</b> <?php echo $modelo->getGenero(); ?>  </p>
                <p> <b>Idade:</b> <?php echo $modelo->getIdade(); ?>  </p>
                <p> <b>Morada:</b> <?php echo $modelo->getMorada(); ?> </p>
                <p> <b>Quadril:</b> <?php echo $modelo->getQuadril(); ?> </p>
                <p> <b>Busto:</b> <?php echo $modelo->getBusto(); ?></p>
                <p> <b>Cintura:</b> <?php echo $modelo->getCintura(); ?></p>
                <p> <b>Altura:</b> <?php echo $modelo->getAltura(); ?></p>
                <p> <b>Nif:</b> <?php echo $modelo->getNif(); ?></p>
                <p> <b>Cod. País:</b> <?php echo $modelo->getCodPais(); ?></p>
                <p> <b>Telefone:</b> <?php echo $modelo->getTelefone(); ?></p>
                <p> <b>Data Inicio:</b> <?php echo $modelo->getDataInicioAgencia(); ?></p>
                <p> <b>Data Fim:</b> <?php echo $modelo->getDataFimAgencia(); ?></p>
            </div>

            <div class="agentes">
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
                                idade
                            </div>
                            <div class="column">
                                Nif
                            </div>
                            <div class="column">
                                Data de Inicio
                            </div>
                            <div class="column">
                                Data Fim
                            </div>
                            <div class="column">
                                Nacionalidade
                            </div>
                            <div class="column">
                                Cod. País
                            </div>
                            <div class="column">
                                Contacto
                            </div>
                        </div>
                        <?php
                        $dados = [
                            'representacao' => [],
                            'modelo' => [],
                            'agente' => [
                                'idagente',
                                'nome',
                                'idade',
                                'nif',
                                'datainicioagencia',
                                'datafimagencia',
                                'nacionalidade',
                                'codpais',
                                'telemovel'
                            ],
                        ];

                        $conexoes = [
                            'representacao.idmodelo = modelo.idmodelo',
                            'representacao.idagente = agente.idagente'
                        ];
                        $agentes = Agente :: pesquisaRelacao($dados, $conexoes, "representacao.idmodelo LIKE '%$pesquisa%'");
            
                        foreach ($agentes as $agente){ 
                            $agente = new Agente([
                                'idagente' => $agente['idagente'],
                                'nome' => $agente['nome'],
                                'idade' => $agente['idade'],
                                'nif' => $agente['nif'],
                                'datainicioagencia' => $agente['datainicioagencia'],
                                'datafimagencia' => $agente['datafimagencia'],
                                'nacionalidade' => $agente['nacionalidade'],
                                'codpais' => $agente['codpais'],
                                'telemovel' => $agente['telemovel']
                            ]);
                            ?>
                            <div class="row">
                                <div class="column">
                                    <?php echo $agente->getId(); ?>
            
                                </div>
                                <div class="column">
                                    <a href="agente_individual.php?id=<?php echo $agente->getId(); ?>"><?php echo $agente->getNome(); ?></a>
                                </div>
                                <div class="column">
                                    <?php echo $agente->getIdade(); ?>
                                    
                                </div>
                                <div class="column">
                                    <?php echo $agente->getNif(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $agente->getDataInicioAgencia(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $agente->getDataFimAgencia(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $agente->getNacionalidade(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $agente->getCodPais(); ?>  
                                </div>
                                <div class="column">
                                    <?php echo $agente->getTelemovel(); ?>  
                                </div>
                                <div class="column">
                                </div>
                            </div>
                        <?php } ?>
                           
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>