<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Inici</title>
    <link rel="stylesheet" href="css/estils.css">
    
</head>

<body>

    <header>
        <div id="titol">
            <h1>Medinho Clothes</h1>
        </div>
        <nav>
            <a href="index.php">Inici</a>
            <a href="formulari.php">Entrada Inventari</a>
        </nav>

    </header>
    <section>
        <div id="formulari">
            <form action="dades" method="get" name="inventari">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" placeholder="Nom marca" required class="field">

                <label for="marca">Tipus:</label>
                <input type="text" name="tipus" placeholder="Oversized, Normal..." required class="field">

                <label for="color">Color:</label>
                <input type="text" name="color" placeholder="color" required class="field">

                <label for="preu">Preu:</label>
                <input type="text" name="preu" placeholder="€" id="preu" size="3" required class="field">


                <p>Selecciona la talla:</p>
                <select name="talla" id="talla">
                    <option value="1">S</option>
                    <option value="1">M</option>
                    <option value="1">L</option>
                    <option value="1">XL</option>
                </select>
                <div id="boto">
                    <input type="submit" value="Envia">
                    <input type="reset" name="netejar" id="netejar" value="Netejar formulari">
                </div>

            </form>
        </div>
    </section>



    <br>

    <footer>
        <p>Fet per Adrià Melà i Oriol Martínez</p>
        <p>Medinho Clothes SL</p>
    </footer>
    

</body>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Dades de la base de dades
	$usuario = "root";
	$password = "Fat/3232";
	$servidor = "192.168.111.1";
	$basededatos = "medinho";
	
	// conexió  a la base de dades amb mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password"" ) or die ("No s'ha pogut connectar a la base de dades");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! " );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM medinho";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	?>

</html>

