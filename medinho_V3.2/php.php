<!--Arxiu php que ens permet entrar les dades del formulari a la BD-->

<?php

//Dades de la nostra BD (ubicació, usuari, contrassenya, nom)

    $servername = "localhost:3306";
    $username = "admin";
    $password = "Fat/3232";
    $dbname = "medinho";

//Creem la conexió amb la BD

    $conn = mysqli_connect($servername, $username, $password, $dbname);

//Comprovem la connexió

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

//En aquest pas, li diem que les dades que entrem al formulari, les ha d'emmagatzemar cada una al su lloc
    
        $marca= $_POST ['marca'];
		$tipus= $_POST ['tipus'];
		$color= $_POST ['color'];
		$preu= $_POST ['preu'];
		$talla= $_POST ['talla'];

    $sql = "INSERT INTO tmedinho (marca, tipus, color, preu, talla)
    VALUES ('$marca', '$tipus', '$color', '$preu', '$talla')";

//Una vegada fem clic al botó d'enviar, ens apareix un missatge que ens informa si s'ha fet correctament, ho hi ha agut algun error

    if (mysqli_query($conn, $sql)) {
      echo "Les dades s'han entrat correctamen a la BD";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
 ?>