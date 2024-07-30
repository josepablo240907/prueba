<?php
require "conexion.php";
$primerNombre=$_POST['primerNombre'];
$segundoNombre=$_POST['segundoNombre'];
$primerApellido=$_POST['primerApellido'];
$segundoApellido=$_POST['segundoApellido'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

//CONSULTA
$consulta="INSERT INTO Alumno(
    primer_nombre,
    segundo_nombre,
    primer_apellido,
    segundo_apellido,
    genero,
    edad,
    fecha_nacimiento,
    telefono_emergencia,
    direccion)

    VALUES ('$primerNombre',
    '$segundoNombre',
    '$primerApellido',
    '$segundoApellido',
    '$genero',
    '$edad',
    '$fechaNacimiento',
    '$telefono',
    '$direccion');";
    // PROGRAM
    $agregar=mysqli_query($conexion, $consulta);
    if ($agregar){
        echo "se agrego el registro";
    }
    else {
        echo "error al realizar el registro";

    }



?>