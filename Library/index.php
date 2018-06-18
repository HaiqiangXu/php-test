<html>
<?php
	session_start();
?>
    <head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>
		<script src="functions.js"></script>
		<title>Bienvenido a Gestion de Biblioteca</title>
    </head>
    <body>

		<table border="0">
			<tr>
				<td colspan="2"><H1>Login</H1></td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;</td>
				<td>
				<?php
					include("login.php");
				?>
				</td>
			</tr>
		</table> 
	
	</body>
</html>