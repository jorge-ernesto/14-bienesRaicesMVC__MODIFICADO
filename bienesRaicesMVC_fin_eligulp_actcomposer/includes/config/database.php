<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', '', 'desarrollowebcompleto_bienesraices_crud');  // Configuracion para desarrollo

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}