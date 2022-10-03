<?php
require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Fotografo.php';
require_once '../classes/Modelo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Procurar Fotografos</title>
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
                    <form action="fotografo.php" method="get">
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
                
                $fotografos = Fotografo :: search(['idfotografo'],["LIKE"],[$condition]);
                
                foreach($fotografos as $fotografo ){
                    ?>
                    
                    <div class="row">
                        <div class="column">
                            <?php echo $fotografo->getId(); ?>
    
                        </div>
                        <div class="column">
                            <a href="fotografo_individual.php?id=<?php echo $fotografo->getId(); ?>"><?php echo $fotografo->getNome(); ?></a>
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getNacionalidade(); ?>
                            
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getIdade(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getMorada(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getNif(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getCodPais(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getTelemovel(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getDataInicioAgencia(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $fotografo->getDataFimAgencia(); ?>  
                        </div>
                        <div class="column">
                            <a href="fotografo_update.php?id=<?php echo $fotografo->getId(); ?>">UPDATE</a>
                        </div>
                    </div>
                <?php
                }
            ?>
            
        </div>
        
    </div>
    
</body>
</html>
