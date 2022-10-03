<?php
require_once '../database/MyConnect.php';
require_once '../database/Databaseable.php';
require_once '../database/WithDatabaseable.php';
require_once '../classes/Trabalho.php';
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
                    <form action="trabalhos.php" method="get">
                        <input type="search" name="idtrabalho" id="" placeholder="pesquisar">
                        <input type="submit">
                    </form>
                </div>
            </div>
            <?php
            
                $pesquisa ="";
                if (!empty($_GET['idtrabalho'])){
                    $pesquisa = $_GET['idtrabalho'];
                }
                
                if($pesquisa == ""){
                    $condition = "%%";
                }else{
                    $condition= "%$pesquisa%' or tipo LIKE '%$pesquisa%";
                }
                $agentes = Trabalho :: search(['idtrabalho'],["LIKE"],[$condition]);
    
                foreach($agentes as $agente ){
                    ?>
                    <div class="row">
                        <div class="column">
                            <a href="media.php?id=<?php echo $agente->getIdtrabalho(); ?>"><?php echo $agente->getIdtrabalho(); ?></a>
                        </div>
                        <div class="column">
                            <?php echo $agente->getTipo(); ?>
                            
                        </div>
                        <div class="column">
                            <?php echo $agente->getDataInicioTrabalho(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $agente->getDataFimTrabalho(); ?>  
                        </div>
                        <div class="column">
                            <?php echo $agente->getLocalizacao(); ?>  
                        </div>
                        <div class="column">
                            <a href="trabalho_update.php?id=<?php echo $agente->getIdtrabalho(); ?>">UPDATE</a>
                        </div>
                        <div class="column">
                            <a href="trabalho_delete.php?id=<?php echo $agente->getIdtrabalho(); ?>">DELETE</a>
                        </div>
                    </div>
                <?php
                }
            ?>
            
        </div>
        
    </div>
    
</body>
</html>