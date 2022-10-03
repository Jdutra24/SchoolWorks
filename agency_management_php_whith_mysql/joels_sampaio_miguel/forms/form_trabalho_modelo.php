<?php
include_once '../database/MyConnect.php';
include_once '../database/Databaseable.php';
include_once '../database/WithDatabaseable.php';
include_once '../classes/Trabalho.php';
include_once '../classes/Modelo.php';
include_once '../classes/Modelo_trabalho.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/master.css">
    <title>modelos involvidos no trabalho</title>
</head>
<body>
	<nav>
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../search.php">SEARCH</a></li>
            <li><a href="../registar.php">REGISTAR</a></li>
        </ul>
    </nav>
	<form action = "form_trabalho_modelo.php" method ="get">
		Trabalho<label for="idtrabalho"></label>
				<select name="idtrabalho" id="">
					<option value="">Escolha o Trabalho</option>
					<?php
						$trabalhos = Trabalho::search([],[],[]);
						foreach($trabalhos as $trabalho){?>
							<option value="<?php echo $trabalho->getIdtrabalho();?>"><?php echo $trabalho->getTipo(); ?></option>
						<?php }
					?>
					</select>
		Modelo<label for= "modelo" >Modelo: </label>
					<select name="idmodelo" id="">
						<option value="">defina o modelo</option>
						<?php
						$modelo = Modelo ::search([],[],[]);
						foreach ($modelo as $modelo){?>
						<option value="<?php echo $modelo->getIdmodelo();?>"><?php echo $modelo->getNome();?></option>
						<?php }
						
					?>
					</select>
		Data inicio do trabalho<input type="date" name="datainiciotrabalho" id="">
		<input type="submit" value="submeter">
		<?php 

		if(!empty($_GET['idmodelo']) && !empty($_GET['idtrabalho']) && !empty($_GET['datainiciotrabalho'])){
			$trabalho_modelo = new Modelo_trabalho([
				'idmodelo' => $_GET['idmodelo'],
				'idtrabalho' => $_GET['idtrabalho'],
				'datainiciotrabalho' => $_GET['datainiciotrabalho'],
			]);
			$trabalho_modelo->save();

			header("location: form_trabalho_modelo.php");
		}
		?>

	</form>
</body>
</html>