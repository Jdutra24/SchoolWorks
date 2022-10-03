<?php
	include_once '../database/MyConnect.php';
	include_once '../database/Databaseable.php';
	include_once '../database/WithDatabaseable.php';
	include_once '../classes/Agente.php';
	include_once '../classes/Modelo.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/master.css">
    <title>Criar representacao</title>
</head>
<body>
	<nav>   
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
	<form action = "../registos/representacao.php" method ="post">
		<label for="agente">Agente:</label>
				<select name="agente" id="">
					<option value="">Sem Agente</option>
					<?php
						$agentes = Agente::search([],[],[]);
						foreach($agentes as $agente){?>
							<option value="<?php echo $agente->getId();?>"><?php echo $agente->getNome(); ?></option>
						<?php }
					?>
					</select>
		<label for= "modelo" >Modelo: </label>
							<?php
							$modelos = Modelo ::search([],[],[]);
							?>
					<select name="modelo" id="">
						<option value="">defina o modelo</option>
						<?php
						
						foreach ($modelos as $modelo){?>
						<option value="<?php echo $modelo ->getIdmodelo();?>"><?php echo $modelo->getNome();?></option>
						<?php }
					?>
					</select>
		Data inicio do colaboração com a empresa<input type="date" name="datainicioagencia" id="">
		<input type="submit" value="submeter representacao">
	</form>
</body>
</html>