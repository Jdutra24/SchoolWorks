<?php 
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Agente.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>Document</title>
</head>
<body>
    <nav>   
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
    <h3>Adicionar Modelo</h3>

    <form action="../registos/modelo.php" method="post">
        </select>
        <form action="criar_modelo.php" method="POST">
        Nome: <input type="text" name="nome" id=""><br>
        Morada: <input type="text" name="morada" id=""><br>
        Idade: <input type="number" name="idade" id=""><br>
        codigo pais: <input type="text" name="codpais" id=""><br>
        Contacto: <input type="text" name="contacto" id=""><br>
        nif: <input type="text" name="nif" id=""><br>
        genero: <input type="text" name="genero" id=""><br>
        nacionalidade: <input type="text" name="nacionalidade" id=""><br>
        altura: <input type="text" name="altura" id=""><br>
        medidas<input type="text" name="quadril" id="">-<input type="text" name="cintura" id="">-<input type="text" name="busto" id=""><br>
        Data de inicio na empresa: <input type="date" name="datainicioagencia" id=""><br>
        Agente<label for="agente">Agente:</label>
        <select name="agente" id="">
            <option value="">Sem Agente</option>
            <?php
                $agentes = Agente::search([],[],[]);
                foreach($agentes as $agente){?>
                    <option value="<?php echo $agente->getId();?>"><?php echo $agente->getNome(); ?></option>
                <?php }
            ?>
            
        </select>

        <br><br>
        <input type="submit" value="Registar">

    </form>
</body>
</html>