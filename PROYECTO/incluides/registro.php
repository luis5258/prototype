<?php
session_start();

if(isset($_POST['submit'])){
    //recoger valores de formulario registro
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    


    $errores = array();

    //validar datos
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "La contraseña esta vacia";
    }
    $guardar_usuario = false;

    if(count($errores)==0){
        $guardar_usuario = true;

    }
    else{
        $_SESSION['errores'] = $errores;
        header('LOCATION: index.php');

    }
        
    
}


?>