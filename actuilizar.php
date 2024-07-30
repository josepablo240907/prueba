<?php
require "conexion.php";
$primerNombreup=['primerNombre'];
$segundoNombreup=['segundoNombre'];
$primerApellidoup=['primerApellido'];
$segundoApellidoup=['segundoApellido'];
$generoup=['genero'];
$edadup=['edad'];
$fechaNacimientoup=['fechaNacimiento'];
$telefonoup=['telefono'];
$direccionup=['direccion'];
$idup=['id'];
$consulta="update Alumno set primer_nombre='$primerNombreup',
segundo_nombre='$segundoNombreup',primer_apellido='$primerApellidoup',
segundo_apellido='$segundoApellidoup',genero='$genero',edad='$edadup',
fecha_nacimiento='$fechaNacimientoup',telefono='$telefonoup',
direccion='$direccionup where id='$idup';"; mysqli_query($conexion,$consulta);
resquire "mostrar.php"
mostrarDatos();
echo $tabla;




?>