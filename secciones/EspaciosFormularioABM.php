<?php /*
		Este archivo representa el DETALLES DE LOS ITEMS DEL TABLERO DE CONTROL !!
		Este archivo esta pensado para que en un futuro, cuando deban agregarse ITEMS al proyectos o modificar los 
		existentes, solo cambiandolos desde aca, se cambien todos automaticamente.
*/?>


<form method="post" action="./conexion/conexionEspaciosABM.php">
	
	<p>Ingrese su Usuario y Contraseña para acceder al Sistema de Tablero de Control de MEJ SOLANO.</p>
	<b>
	<!---->
	<div id="login-box-name">Nombre de Espacio nuevo:</div>
        <div id="login-box-field">
			<input name="nombreEspacio" class="form-login" title="" value="" size="30" maxlength="20" />
		</div>

	<br>
	<table cellpadding='0' cellspacing='0' border-='none' width='100%'>
		<tr>
			<td><input type="submit" value="CARGAR" class="boton"></td>
			<td><input type="reset"  value="BORRAR" class="boton"></td>
		</tr>
	</table><br><br>
	<!---->
</form>

