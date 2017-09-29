<?php

$mes=date("n");
$año=date("Y");
$dia=date("j");

$diasemana=date("w",mktime(0,0,0,$mes,1,$año));
$ultimodiames=date("d",(mktime(0,0,0,$mes+1,1,$año)-1));

$meses=array(1=>"Ianuarius", "Februarius", "Martius", "Aprilis", "Maius", "Iunius", "Iulius", "Augustus", "September", "Octuber", "November", "December");

?>

<!DOCTYPE html>

<html lang="es">

<head>


	<title>Intento de Calendario</title>

	<meta charset="utf-8">

	<style>
		h1{
			text-align: center;
		}
		#calendario{
			
			font-family:Times;
			font-size:20px;
		}
		#calendario caption{
			background-color: black;
			padding: 5px 10px;
			color:magenta;
			font-weight: bold;
		}
		#calendario th{
			text-align: center;
			background-color: magenta;
			color: black;
			width: 50px;
		}

		#calendario td{
			text-align: center;
			background-color: pink;
		}
		#calendario .hoy{
			background-color: black;
			color:magenta;
			font-weight: bold;
		}
		table{
			margin: 0 auto;
			width: 50%;
		}
	</style>
</head>

<body>
<h1>Intento de Calendario</h1>
<table id="calendario">
	<caption><?php echo $meses[$mes]." ".$año ?></caption>
	<tr>
		<th>Lunae</th><th>martis</th><th>Mercurii</th><th>Iovis</th>
		<th>Veneris</th><th>Saturni</th><th>Dominica</th>
	</tr>
	
</table>
</body>
</html>