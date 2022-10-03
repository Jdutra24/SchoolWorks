<?php
require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Agente.php';
require_once '../classes/Modelo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Procurar Agentes</title>
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
                <div class="column">
                    <form action="agente.php" method="get">
                        <input type="search" name="idagente" id="" placeholder="pesquisar">
                        <input type="submit">
                    </form>
                </div>
            </div>
            <?php
            
                $pesquisa ="";
                if (!empty($_GET['idagente'])){
                    $pesquisa = $_GET['idagente'];
                }
                
                if($pesquisa == ""){
                    $condition = "%%";
                }else{
                    $condition= "%$pesquisa%' or nome LIKE '%$pesquisa%";
                }
                $agentes = Agente :: search(['idagente'],["LIKE"],[$condition]);
    
                foreach($agentes as $agente ){
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
                        <div class="column">
                            <a href="agente_update.php?id=<?php echo $agente->getId(); ?>">UPDATE</a>
                        </div>
                    </div>
                <?php
                }
            ?>
            
        </div>
        
    </div>
    
</body>
</html>