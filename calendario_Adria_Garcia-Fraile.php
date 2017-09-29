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
		body{
			background: url('Wllp_mag.jpg');
		}

		h1{
			text-align: center;
			-webkit-text-stroke: 1px black;
			color:pink;
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
			border: 2px solid black;
		}

		#calendario td{
			text-align: center;
			background-color: pink;
			border: 1px solid black;
		}
		#calendario .hoy{
			background-color: black;
			color:magenta;
			font-weight: bold;
			border: 5px solid magenta;
			-webkit-text-stroke: 1px pink;
			animation-name: parpadeo;
			animation-duration: 1s;
			animation-iteration-count: infinite; 
		}
		@keyframes parpadeo{
			0% {opacity: 1.0;}
			50% {opacity: 0.0;}
			100% {opacity: 1.0;}
		}

		table{
			margin: 0 auto;
			width: 75%;
		}
	</style>
</head>

<body>
<h1> . : Calendario : . </h1>
<table id="calendario">
	<caption><?php echo $meses[$mes]." ".$año ?></caption>
	<tr>
		<th>Lunae</th><th>martis</th><th>Mercurii</th><th>Iovis</th>
		<th>Veneris</th><th>Saturni</th><th>Dominica</th>
	</tr>
	<tr>
		<?php

		$ultima_celda=$diasemana+$ultimodiames;

			for($i=1;$i<=35;$i++){

				if($i==$diasemana){
					$hoy=1;
				}

				if($i<$diasemana || $i>=$ultima_celda){
					echo "<td></td>";
				}

				else{
					if($hoy==$dia){
						echo "<td class='hoy'>$hoy</td>";
					}
					
					else{
						echo "<td>$hoy</td>";
					}
					
					$hoy++;
				}

				if($i%7==0){
					echo "</tr><tr>\n";
				}
			}
		?>
	</tr>
</table>
</body>
</html>