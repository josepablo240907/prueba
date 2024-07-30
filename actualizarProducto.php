<?php

function actualizar_imagen(){
    if(isset($_FILES["imagenProductoAP"])){
        $extension= explode('.',$_FILES['imagenProductoAP']['name']);
        $new_name=rand(). '.' . $extension[1];
        $destination='./img/'.$new_name;
        move_uploaded_file($_FILES['imagenProductoAP']['tmp_name'],$destination);
        return $new_name;
    }
}

require "conexion.php";
$image='';
if($_FILES['imagenProductoAP']['name']!=''){
    $image=actualizar_imagen();
    $nombrePU=$_POST['nombreAP'];
    $modeloPU=$_POST['modeloAP'];
    $idPU=$_POST['idAP'];

    $consulta="update Producto set nombre_producto='$nombrePU', modelo='$modeloPU', imagen='$image' where id='$idPU';";

    mysqli_query($conexion,$consulta);
    require "cargarProducto.php";
    mostrarProductos();
    echo $tabla;
}
else{
    $nombrePU=$_POST['nombreAP'];
    $modeloPU=$_POST['modeloAP'];
    $idPU=$_POST['idAP'];

    $consulta="update Producto set nombre_producto='$nombrePU', modelo='$modeloPU' where id='$idPU';";

    mysqli_query($conexion,$consulta);
    require "cargarProducto.php";
    mostrarProductos();
    echo $tabla;
}




?>