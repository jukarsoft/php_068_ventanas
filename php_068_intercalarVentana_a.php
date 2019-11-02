<?php 
	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$n1=null;
	$color='blue';
	//se ejecuta si se ha pulsado el boton 'enviar'
	//comprobar si ha pulsado el boton
	if (isset($_POST['enviar'])) {
		
		$n1=$_POST['num'];
		if ($n1%2==0) {
			$color = 'green';
		} else {
			$color = 'blue';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>intercalar ventana opcion una caja cambia colo</title>
	<style type="text/css">
		body {
			
		}
		#id1 {
			width: 200px;
			height: 100px;
			background-color: <?=$color;?>;
			border: 1px solid black;
		}
		
	</style>
</head>
<body>
	<form method='post' action="#">
		<input type="number" name="num"  min="1" value="<?=$n1;?>">
		<input type="submit" name="enviar">

	</form>
	<div id='id1'></div>
	
</body>
</html>