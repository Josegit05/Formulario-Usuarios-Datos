<?php

if(file_exists("datosPerfil.txt") && filesize("datosPerfil.txt")>0)
{
	$manejador = fopen("datosPerfil.txt", "r");
	$Lectura= fread($manejador,filesize("datosPerfil.txt"));
	echo $Lectura;
	fclose($manejador);
}
?>
<html>
	<body>
		<form action="Rellenar.php" method="post" enctype="multipart/form-data">
		<br>
			<label for="nombre">Nombre: </label> <input type="text" name="nombre"/>
			
			<br><br>
            <label for="apellidos">Sus apellidos:</label> <input type="text" name="apellidos" />
			<br><br>
			<label for="ingresacorreo">Correo electronico:</label> <input name="ingresacorreo" type="email" />
			<br><br>
			<label for="entradapais">Pais:</label> 
			<select name="entradapais">
				<option value="Espania">Espania</option>
				<option value="Francia">Francia </option>
				<option value="Portugal">Portugal</option>
			</select>
			
			<br><br>
            <label for="entradapais">Notificaciones por email:</label>
				<input type="radio" value="Sí" name="Notificaciones"/>Si
                <input type="radio" value="No" name="Notificaciones"/>No
				<br><br>
			<input type="submit" name="submit" value="Enviar"/>
		</form>
	</body>
</html>
