<html>
 <head>
    <title>Paises</title>
    
 </head>
 
 <body>
    <h1></h1>
	
 
    <?php
        
        $conn = mysqli_connect('localhost','miguel','miguel123');
 
       
        mysqli_select_db($conn, 'world');
 
        
        $consulta = "SELECT Name , Code FROM country;";
 
        
        $resultat = mysqli_query($conn, $consulta);
 
        
        if (!$resultat) {
                $message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
                $message .= 'Consulta realitzada: ' . $consulta;
                die($message);
        }

        echo "<form action='ciudades.php' method='get' target='_blank'>";
        while( $registre = mysqli_fetch_assoc($resultat) ){
            $imagenes=$registre["Name"].".png";
            echo '<input type="radio" name="pais" value='.$registre["Code"].'>'.$registre["Name"];
            echo " <img src='banderas/$imagenes'> ";
        }
        echo "<br>";
        echo "<input type='submit' name='Submit'>";
        echo"</form>";
        
        
    ?>
    <!-- (3.6) tanquem la taula -->
    <!--select city.Name from city,country WHERE city.CountryCode=country.Code AND  city.CountryCode="AND";
	-->  
 </body>
</html>