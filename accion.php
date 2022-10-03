<?php
$nombre="José María";
$apellidos="García Morales";
$ingresacorreo="josemariagarciamorales@alumno.ieselrincon.es";
$Pais="Espania";
$Email1="yes";
?>
<html>
	<body>
		<form action="Rellenar.php" method="post">
			<p>Su nombre: <input type="text" name="nombre" value="<?php echo $nombre?>"/></p>
			
            <p>Sus apellidos: <input type="text" name="apellidos" value="<?php echo $apellidos?>" /></p>
			
			<p>Correo electronico: <input name="ingresacorreo" type="email" value="<?php echo $ingresacorreo?>" /></p>
			
			<p>Pais: <select name="entradapais">
            <option selected value="<?php echo $Pais?>"> <?php echo $Pais?>
				</select>
			</p>

            <p>Notificaciones por email:
				<input type="radio" value="si" name="Notificaciones"/>Si
                <input type="radio" value="no" name="Notificaciones"/>No
			</p>
            
			<p><input type="submit" value="Subir fichero"/></p>
		</form>
	</body>
</html>
