
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
    <?php
    if(isset($_GET['mensagem'])){
        echo $_GET['mensagem'];
    }
    ?>
    <form action="../registos/fotografo.php" method="POST">
        nome: <input type="text" name="nome" id=""><br>
        idade: <input type="text" name="idade" id=""><br>
        nacionalidade: <input type="text" name="nacionalidade" id=""><br>
        codpais: <input type="text" name="codpais" id=""><br>
        telemovel: <input type="text" name="telemovel" id=""><br>
        nif: <input type="text" name="nif" id=""><br>
        morada: <input type="text" name="morada" id=""><br>
        datainicioagencia: <input type="date" name="datainicioagencia" id=""><br>
        datafimagencia: <input type="date" name="datafimagencia" id=""><br>
        <input type="submit" value="criar">
    </form>
</body>
</html>