<?php
require "conexion.php";

$nombre=$_POST['nombre'];
$turno=$_POST['turno'];
$horaI=$_POST['horaI'];
$horaF=$_POST['horaF'];

$consulta= "Insert into Curso(nombre_curso,turno,hora_inicio,hora_termina) values ('$nombre','$turno','$horaI','$horaF');";

$r=mysqli_query($conexion,$consulta);

if($r)
{
    echo "se agrego el registro";
}
else{
    echo "error al insertar el registro";
}

require "cargarCursos.php";
mostrarCursos();
echo $tabla;

mysqli_close($conexion);





?>