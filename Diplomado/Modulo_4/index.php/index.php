<?php 

$Meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
			   "Septiembre","Octubre","Noviembre","Diciembre");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Diplomado</title>
</head>
<body>
	<h1>Registro Facebook</h1>

	<form method="POST" action="registrar.php">
		Nombres <br>
		<input type="text" name="Nombres" required="" placeholder="Nombres"><br><br>
		Apellidos <br>
		<input type="text" name="Apellidos" required="" placeholder="Apellidos"><br><br>
		Correo <br>
		<input type="email" name="Correo" required="" placeholder="Correo"><br><br>
		Contraseña <br>
		<input type="password" name="Contrasena" required="" placeholder="Contraseña"><br><br>
		<select name="DiaNacimiento" required="">
			<option>Día</option>
			<?php 
			for ($i=1; $i <= 31; $i++) { 
			?>
			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php
			}
			?>
		</select>
		<select name="MesNacimiento" required="">
			<option>Mes</option>
			<?php 
			foreach ($Meses as $Mes) {
			?>
			<option value="<?php echo $Mes; ?>"><?php echo $Mes; ?></option>
			<?php
			}
			?>
		</select>
		<select name="AnoNacimiento" required="">
			<option>Año</option>
			<?php 
			for ($i=2019; $i >= 1950; $i--) {
			?>
			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php
			}
			?>
		</select><br><br>
		Sexo <br>
		<input type="radio" name="Sexo" value="Mujer"> Mujer
		<input type="radio" name="Sexo" value="Hombre"> Hombre
		<input type="radio" name="Sexo" value="Personalizado"> Personalizado
		<p>Al hacer clic en "Registrarte", aceptas nuestras Condiciones, la Política de datos y la Política 
		de cookies.<br>Es posible que te enviemos notificaciones por SMS, que puedes desactivar cuando quieras.</p>
		<input type="submit" value="Registrarte">
	</form>
</body>
</html>



