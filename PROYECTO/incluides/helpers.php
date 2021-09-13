<?php

function mostrarError($errores, $campo){
    $alerta ='';

    if(isset($errores[$campo]) && !empty($empty)){
       $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alerta;
}

?>