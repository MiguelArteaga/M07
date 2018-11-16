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
        echo "<select name='paises'>";
        while( $registre = mysqli_fetch_assoc($resultat) ){
            echo '<option value='.$registre["Code"].'>'.$registre["Name"].'</option>';
        }
        echo "<input type='submit' name='Submit'>";
        echo "</select>";
        echo"</form>";
        
        
    ?>
    <!-- (3.6) tanquem la taula -->
    <!--select city.Name from city,country WHERE city.CountryCode=country.Code AND  city.CountryCode="AND";
	-->  
 </body>
</html>