<?php

    $servername = "localhost:3306";
    $username = "admin";
    $password = "Fat/3232";
    $dbname = "medinho";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
   <!DOCTYPE html>
<html lang="ca">

    <head>
        <meta charset="UTF-8">
        <title>Inici</title>
        <link rel="stylesheet" href="css/estils.css">
    </head>
    <body>

      
<!--Aquí podem veure la capçalera de la nostra pàgina web-->

        <header>
            <h1>Medinho Clothes</h1>
            <nav>
                <a href="index.php">Inici</a>
                <a href="formulari.html">Entrada Inventari</a>
            </nav>
        </header>
        
        
   <div class="bfiltre">
   <form METHOD=POST ACTION="buscar.php" class="bfiltre">
    <input type="text" name="tipus" placeholder="Ingresa el tipus">
    <input type="submit" name="name" value="Buscar" id="busqueda">
</form>     
        </div>
   <div id="index">
            <table border="2" class="taulaindex">
                <tr>
                    <th>marca</th>
                    <th>tipus</th>
                    <th>color</th>
                    <th>preu</th>
                    <th>talla</th>
                </tr>     
        
   <?php
    
    $tipus = $_POST['tipus'];

    $sql="SELECT * FROM tmedinho WHERE tipus = '$tipus'";
    $registros=mysqli_query($conn,$sql);
    
    while ($registro = mysqli_fetch_array($registros)){
        
    
?>

                <tr>
                    <td><?php echo $registro["marca"]?></td>
                    <td><?php echo $registro["tipus"]?></td>
                    <td><?php echo $registro["color"]?></td>
                    <td><?php echo $registro["preu"]?></td>
                    <td><?php echo $registro["talla"]?></td>
                </tr>
      
    <?php
    }
    ?>
       </table>
        </div>
        <footer>
            <p>Fet per Adrià Melà i Oriol Martínez</p>
            <p>Medinho Clothes SL</p>
        </footer>
      
    </body>
</html>