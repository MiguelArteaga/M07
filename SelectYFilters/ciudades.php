<html>
 <head>
 	<title>Ciudades</title>
 	<style>
 		body{
 		}
 		table,td {
 			border: 1px solid black;
 			border-spacing: 0px;
 		}
 	</style>
 </head>
 
 <body>
 	
 
 	<?php
 		$codigo=$_GET["pais"];
 		$conn = mysqli_connect('localhost','miguel','miguel123');
 
 		mysqli_select_db($conn, 'world');
 
 	
 		$consulta = "SELECT country.Name COUNTRY, city.Name CITY FROM country, city WHERE country.Code=city.CountryCode AND country.Code='$codigo';";
 
 		
 		$resultat = mysqli_query($conn, $consulta);
 
 		
 	?>
 
 	<table>

 	<thead><td colspan="4" align="center" bgcolor="cyan">Llistat de ciutats</td></thead>
 	<?php
 
 		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
 		
 			echo "\t<tr>\n";
 
 			
 			echo "\t\t<td>".$registre["CITY"]."</td>\n";
 			echo "\t\t<td>".$registre["COUNTRY"]."</td>\n";
 
 			
 			echo "\t</tr>\n";
 		}
 	?>
 	</table>	
 </body>
</html>