<?php session_start();
$error;

if(!empty($_POST['usuario']) && !empty($_POST['contra'])){
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    if($usuario == "administrador" && $contra == "asd"){
        header("Location: grafica.php?error=$error");
       
    }else if($usuario == "cliente" && $contra == "123"){
        header("Location: index.php?error=$error");
        
    }else {
        echo "usuario o contrasenia incorrectas";
        
    }
}else{
    echo "datos vacios";
}