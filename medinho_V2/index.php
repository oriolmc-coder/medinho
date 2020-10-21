<!--En aquest apartat del php, fem la conneció amb la taula de la BD on trobem les dades que entrem al formulari-->

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


<!--Aqui trobem la nostra web, el que es mostra en ella-->

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


<!--Aquest es el desplegable per a filtrar per marques-->

<!--
        <div id="box">
        <div class="column"></div>
        <div class="column">
        <div class="clear"></div>
        <label class="first-column ">Selecció per marca:</label><div class="clear"></div>
        <div class="clear"></div>
        </div>
        <div class="column"></div>
        </div>

        <?php

            echo '<select>
            <option>Select</option>';

            $sqli = "SELECT DISTINCT marca FROM tmedinho ORDER BY marca ASC ";
            $result = mysqli_query($conn, $sqli);
            while ($row = mysqli_fetch_array($result)) {
            echo '<option>'.$row['marca'].'</option>';
            }

            echo '</select>';

       ?>
-->


<!--En aquest apartat, hi ha la taula amb el php per a mostrar-la de la nostra BD-->

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
                    $sql="SELECT * FROM tmedinho ORDER BY marca ASC, preu ASC";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
               
                <tr>
                    <td><?php echo $mostrar["marca"]?></td>
                    <td><?php echo $mostrar["tipus"]?></td>
                    <td><?php echo $mostrar["color"]?></td>
                    <td><?php echo $mostrar["preu"]?></td>
                    <td><?php echo $mostrar["talla"]?></td>
                </tr>
                
                <?php
                    }
                ?>
           
            </table>
        </div>


<!--El peu de pàgina o footer-->

        <footer>
            <p>Fet per Adrià Melà i Oriol Martínez</p>
            <p>Medinho Clothes SL</p>
        </footer>


    </body>

</html>