<?php 
	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$n1=null;
	$color='green';
	//se ejecuta si se ha pulsado el boton 'enviar'
	//comprobar si ha pulsado el boton
	if (isset($_POST['enviar'])) {
		
		$n1=$_POST['num'];
		if ($n1%2==0) {
			$color='green';
		} else {
			$color='blue';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>intercalar ventana</title>
	<style type="text/css">
		body {
			position: relative;
		}
		#id1 {
			width: 200px;
			height: 100px;
			background-color: green;
			border: 1px solid black;
			position:absolute;
			top:20px;
		}
		#id2 {
			width: 200px;
			height: 100px;
			background-color: blue;
			border: 1px solid black;
			position:absolute;
			top:20px;
			
		}
	</style>
</head>
<body>
	<form method='post' action="#">
		<input type="number" name="num"  min="1" value="<?=$n1;?>">
		<input type="submit" name="enviar">

	</form>
		<?php
	 		if ($color=='green') {
	 	?> 
	 		<div id='id1'></div>	
		<?php
	  		} else {
	 	?> 
	 		 <div id='id2'></div>	
	 	<?php
	 		}
	 	?> 
	
	
</body>
</html>