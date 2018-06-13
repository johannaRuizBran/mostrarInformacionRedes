<!DOCTYPE html>
<html>
<head>
	<title>Información de Tweets</title>
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}

		.container{
			margin-left: 20%;
			margin-right: 20%;
			margin-top: 10%;
		}

		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>INFORMACIÓN SOBRE TWEETS</h1>
		<table class="egt">
		  <tr>
		    <th scope="row">Nombre de usuario</th>
		    <th>Fecha</th>
		    <th>Mensaje</th>
		    <th>Nombre de usuario</th>
		  </tr>
		  
	  	<?php
			$mysqli = new mysqli('127.0.0.1', 'root', 'MyNewPass', 'base');
			$mysqli->set_charset("utf8");

			$res = $mysqli->query("SELECT * FROM tweets");

			while($f = $res->fetch_object()){
			    echo "<tr>
			    		<td>".$f->nombreUsuario."</td>
			    		<td>".$f->fechaCreacion."</td>
		    			<td>".$f->mensaje."</td>
		    			<td>".$f->userName."</td>
			    	</tr>" ;
			}
		?>	    	  
		</table>	
	</div>	
</body>
</html>
