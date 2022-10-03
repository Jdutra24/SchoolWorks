<?php
require_once 'MyConnect.php';
require_once 'Databaseable.php';
require_once 'WithDatabaseable.php';
require_once 'Trabalho.php';
require_once 'Modelo.php';
require_once 'Modelo_trabalho.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar media</title>
</head>
<body>
	<form action = "form_media.php" method ="get">
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
		<label for= "fotografo" >Modelo: </label>
					<select name="idfotografo" id="">
						<option value="">defina o fotografo</option>
						<?php
						$fotografos = Fotografo ::search([],[],[]);
						foreach ($fotografos as $fotografo){?>
						<option value="<?php echo $fotografo->getId();?>"><?php echo $fotografo->getNome();?></option>
						<?php }
						
					?>

        <label for="modelo">modelo</label>
        <select name="idmodelo" id="">
			<option value="">defina o modelo</option>
			<?php
				$modelos = Modelo ::search([],[],[]);
			?>

			<?php foreach ($modelos as $modelo):?>
				<option value="<?php echo $modelo->getIdmodelo();?>"><?php echo $modelo->getNome();?></option>
			<?php endforeach; ?>

		</select>
		Data inicio da media:<input type="date" name="datamedia" id="">
        Metadados: <input type="text" name="metadados" id="">
        resoluçao: <input type="text" name="resolucao" id="">
		<input type="submit" value="submeter">
		<?php 
		$media_media = new Modelo_media([
			'idmodelo' => $_GET['idmodelo'],
			'idtrabalho' => $_GET['idtrabalho'],
			'datainiciotrabalho' => $_GET['datainiciotrabalho'],
		]);
		$trabalho_modelo->save();
        $media = new Media([
            'datamedia' => $_GET['datainiciotrabalho'],
            'resolucao' => $_GET['resolucao'],
            'idtrabalho' => $_GET['idtrabalho'],
            'metadados' => $_GET['metadados'],
            'idfotografo' => $_GET['idfotografo'],
        ]);
        $media -> save();
		?>

	</form>
</body>
</html>