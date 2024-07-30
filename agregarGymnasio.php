<?php
    
    function subir_imagen(){
        if(isset($_FILES["imagenGym"])){
            $extension= explode('.',$_FILES['imagenGym']['name']);
            $new_name=rand(). '.' . $extension[1];
            $destination='./img/'.$new_name;
            move_uploaded_file($_FILES['imagenGym']['tmp_name'],$destination);
            return $new_name;
        }
    }
 
    require "conexion.php";
    $image='';
    if($_FILES['imagenGym']['name']!=''){
        $image=subir_imagen();
        $nombreGym=$_POST['nombreGym'];
        $latitud=$_POST['latitud'];
        $longitud=$_POST['longitud'];
        $consulta="Insert into gimnasio(nombre,latitud,longitud,imagen)values('$nombreGym','$latitud','$longitud','$image');";
        mysqli_query($conexion,$consulta);

        require "cargarGymnasio.php";
        mostrarGym();
        echo $tabla;
       
    }
    else{
        $nombreGym=$_POST['nombreGym'];
        $latitud=$_POST['latitud'];
        $longitud=$_POST['longitud'];
        $consulta="Insert into gimnasio(nombre,latitud,longitud)values('$nombreGym','$latitud','$longitud');";
        mysqli_query($conexion,$consulta);

        require "cargarGymnasio.php";
        mostrarGym();
        echo $tabla;
    }

    





?>