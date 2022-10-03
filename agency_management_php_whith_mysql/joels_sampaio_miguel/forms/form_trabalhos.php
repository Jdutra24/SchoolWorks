<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Trabalho.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Registo de um trabalho</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
    <h3>Criar Trabalho</h3>
    <form action="../registos/trabalho.php" method="post">

    Tipo <input type="text" name="tipo" palceholders="tipo de trabalho" id=""><br>
    Data de inicio: <input type="date" name="datainiciotrabalho" id=""><br>
    Data de terminaçao: <input type="date" name="datafimtrabalho" id=""><br>
    Localizaçao: <input type="text" name="localizacao" id=""><br>
    
    <input type="submit" value="criar trabalho" id="">   

</form>
</body>
</html>