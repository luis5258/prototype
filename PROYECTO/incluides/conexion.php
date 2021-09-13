<?php
$db = mysqli_connect("localhost","root","12345","aprendiendophp");
mysqli_query($db, "SET NAMES 'UTF8'");

if(mysqli_errno($db)){
    echo "ERROR AL CONECTARSE".mysqli_connect_error();
}else{
    echo "conectado";
}

session_start();
?>