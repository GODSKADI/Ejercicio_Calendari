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
</head>

<body>
<h1>Intento de Calendario</h1>
<table id="calendario">
	<caption><?php echo $meses[$mes]." ".$año ?></caption>
	<tr>
		<th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th>
		<th>Fri</th><th>Sat</th><th>Sun</th>
	</tr>
	<tr>
		
	</tr>
</table>