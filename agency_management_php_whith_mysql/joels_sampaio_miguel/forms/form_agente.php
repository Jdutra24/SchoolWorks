<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Agente</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
    <form action="../registos/agente.php" method="POST">
        Nome: <input type="text" name="nome" id=""><br>
        Idade: <input type="text" name="idade" id=""><br>
        Nif: <input type="text" name="nif" id=""><br>
        Data de Inicio: <input type="date" name="datainicioagencia" id=""><br>
        Data de fim: <input type="date" name="datafimagencia" id=""><br>
        Nacionalidade: <input type="text" name="nacionalidade" id=""><br>
        Cod. Pais: <input type="text" name="codpais" id=""><br>
        Telemovel: <input type="text" name="telemovel" id=""><br>

        <input type="submit" value="criar">
    </form>
</body>
</html>