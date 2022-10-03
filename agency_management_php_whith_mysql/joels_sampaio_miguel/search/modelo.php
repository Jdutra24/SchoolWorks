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
    <title>Procurar Modelos</title>
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
                <div class="column">
                </div>
                <div class="column">
                </div>
                <div class="column">
                </div>
                <div class="column">
                </div>
                <div class="column">
                    <form action="modelo.php" method="get">
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
                
                $modelos = Modelo :: search(['idmodelo'],["LIKE"],[$condition]);
                
                foreach($modelos as $modelo ){
                    ?>
                    
                    <div class="row">
                        <div class="column">
                            <?php echo $modelo->getIdModelo(); ?>
    
                        </div>
                        <div class="column">
                            <a href="modelo_individual.php?id=<?php echo $modelo->getIdModelo(); ?>"><?php echo $modelo->getNome(); ?></a>
                        </div>
                        <div class="column">
                            <?php echo $modelo->getNacionalidade(); ?>
                            
                        </div>
                        <div class="column">
                            <?php echo $modelo->getGenero(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getIdade(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getMorada(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getQuadril(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getBusto(); ?> - 
                            <?php echo $modelo->getCintura(); ?> - 
                            <?php echo $modelo->getAltura(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getNif(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getCodPais(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getTelefone(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getDataInicioAgencia(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $modelo->getDataFimAgencia(); ?>  
                        </div>
                        <div class="column">
                            <a href="modelo_update.php?id=<?php echo $modelo->getIdModelo(); ?>">UPDATE</a>
                        </div>
                    </div>
                <?php
                }
            ?>
            
        </div>
        
    </div>
    
</body>
</html>