<?php

require "conexion.php";

$nom=$_POST['nom'];
$tur=$_POST['tur'];
$horaI=$_POST['horaI'];
$horaF=$_POST['horaF'];
$idU=$_POST['id'];


$consulta="update Curso set nombre_curso='$nom', turno='$tur', hora_inicio='$horaI',hora_termina='$horaF' where id='$idU';";

mysqli_query($conexion,$consulta);


// LLamando a la funcion para mostrar los datos despues del update
require "cargarCursos.php";
mostrarCursos();
echo $tabla;

?>