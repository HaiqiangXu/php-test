<?php
	if (isset($_POST['dni'], $_POST['pass']) /*&&
		true*/)	//comprobacion contra la BBDD
	{
		$user = $_POST['dni'];
		$pass = $_POST['pass'];
		if (!isset($user) || $user == '')
			$user = 'root';
		
		//$conn = mysql_connect("localhost", $user, $pass);	//deplecated since PHP7.x -> since then, use either mysqli or PDO. Check http://php.net/manual/en/mysqlinfo.api.choosing.php
		$conn = new mysqli("localhost", $user, $pass, "test");
		if ($conn->connect_errno)
		{
			echo "<h2>Login incorrecto!</h2><br/>";
			echo "<p>Errno: " . $conn->connect_errno . "\n</p>";
    		echo "<p>Error: " . $conn->connect_error . "\n</p>";
			echo '<p><a href="index.php">Logearse</a></p>';
		}
		else
		{
			echo "Logeado como $user, pass MD5: ".md5($pass);
	
			// // $f = fopen("library.sql", "rt");
			// // $sql = readfile($f);
			// $sql = file_get_contents("library.sql");
			// echo $sql . "<br/>";
			// if (mysql_query($sql, $conn))
				// echo "Creación de las tablas correcto";
			// else
			// {
				// echo "Error en la creación de las tablas<br>";
				// echo mysql_error();
			// }
	
			// echo "<br/><br/>";
			// // die($sql);	//aborta la ejecucion de todas las lineas posteriores a esta funcion, incluido codigo HTML
			
			// //eliminacion previa y posterior creacion de la Base de Datos (o Schema)
			// $query = "DROP SCHEMA IF EXISTS biblioteca";
			// if (mysql_query($query, $conn))
			// 	echo "Eliminacion base de datos 'biblioteca' correcto";
			// else
			// 	echo "Error en la eliminacion de la base de datos 'biblioteca'";
			// echo "<br/><br/>";
			
			// //eliminacion previa y posterior creacion de la Base de Datos (o Schema)
			// $query = "CREATE SCHEMA biblioteca";
			// if (mysql_query($query, $conn))
			// 	echo "Creacion base de datos 'biblioteca' correcto";
			// else
			// 	echo "Error en la creacion de la base de datos 'biblioteca'";
			// echo "<br/><br/>";
			
			// //eliminacion previa y posterior creacion de la tabla Book
			// DropTable('book', $conn);
			
			// $query = "CREATE TABLE biblioteca.book (Isbn int(13) unsigned NOT NULL, Title varchar(150) NOT NULL, Units int(3) unsigned NOT NULL, PRIMARY KEY (Isbn)) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			// if (mysql_query($query, $conn))
			// 	echo "Creaci�n de la tabla book correcto";
			// else
			// 	echo "Error en la creaci�n de la tabla book";
			// echo "<br/><br/>";
			
			// //eliminacion previa y posterior creacion de la tabla Lending
			// DropTable('lending', $conn);
			
			// $query = "CREATE TABLE biblioteca.lending (IdLibrary int(3) unsigned NOT NULL, Dni varchar(9) NOT NULL, Isbn int(13) unsigned NOT NULL, DateInit datetime NOT NULL, DateEnd datetime NOT NULL, PRIMARY KEY (IdLibrary,Dni,Isbn,DateInit)) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			// if (mysql_query($query, $conn))
			// 	echo "Creaci�n de la tabla lending correcto";
			// else
			// 	echo "Error en la creaci�n de la tabla lending";
			// echo "<br/><br/>";
			
			// //eliminacion previa y posterior creacion de la tabla Reservation
			// DropTable('reservation', $conn);
			
			// $query = "CREATE TABLE biblioteca.reservation (IdLibrary int(3) unsigned NOT NULL, Dni varchar(9) NOT NULL, Isbn int(13) unsigned NOT NULL, Date datetime NOT NULL, PRIMARY KEY (IdLibrary,Dni,Isbn,Date)) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			// if (mysql_query($query, $conn))
			// 	echo "Creaci�n de la tabla reservation correcto";
			// else
			// 	echo "Error en la creaci�n de la tabla reservation";
			// echo "<br/><br/>";
			
			// //eliminacion previa y posterior creacion de la tabla User
			// DropTable('user', $conn);
			
			// $query = "CREATE TABLE biblioteca.user (Dni varchar(9) NOT NULL, Pass varchar(45) NOT NULL, Email varchar(45) NOT NULL, Name VARCHAR(45) NOT NULL, Rank VARCHAR(45) NOT NULL, Active int(1) NOT NULL, PRIMARY KEY (Dni)) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			// if (mysql_query($query, $conn))
			// 	echo "Creaci�n de la tabla user correcto";
			// else
			// 	echo "Error en la creaci�n de la tabla user";
			// echo "<br/><br/>";
			
			// //eliminacion previa y posterior creacion de la tabla Library
			// DropTable('library', $conn);
			
			// $query = "CREATE TABLE biblioteca.library (IdLibrary int(3) unsigned NOT NULL DEFAULT 0, Name varchar(50) NOT NULL, PRIMARY KEY (IdLibrary)) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			// if (mysql_query($query, $conn))
			// 	echo "Creaci�n de la tabla library correcto";
			// else
			// 	echo "Error en la creaci�n de la tabla library";
			// echo "<br/><br/>";
			
			// //insertar biblioteca por defecto
			// $query = "INSERT INTO biblioteca.library (IdLibrary, Name) VALUES (0, 'biblioteca')";
			// if (mysql_query($query, $conn))
			// 	echo "Inserci�n de la biblioteca por defecto correcto";
			// else
			// 	echo "Error en la inserci�n de la biblioteca por defecto";
			
			// //cerrar conexion MySql
			// mysql_close($conn);
		}
	
		// function DropTable($table, $conn)
		// {
		// 	$query = "DROP TABLE IF EXISTS $table";
		// 	if (mysql_query($query, $conn))
		// 		echo "Eliminacion de la tabla $table correcto";
		// 	else
		// 		echo "Error al eliminar la tabla $table de la base de datos";
		// 	echo "<br/>";
		// }
		echo "<hr/>";
?>

	<form action="index.php" method="post">
		<p><input type="submit" value="Salir" /></p>
	</form>

<?php
	}
	else
	{
?>
	<!--include HTML as echo inside php code block!-->
	<form action="index.php" method="post">
		<table>
			<tr>
				<td>DNI:</td>
				<td><input type="text" name="dni" value="root" /></td>
			</tr>
			<tr>
				<td>Pass:</td>
				<td><input type="password" name="pass" /></td>
			</tr>
			<tr colspan="2">
				<td><input type="submit" value="Entrar" /></td>
			</tr>
		</table>
	</form>

<?php
	}
?>