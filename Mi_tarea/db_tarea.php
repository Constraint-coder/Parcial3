<?php
//PARA LOS ALERTAS DE LOS MENSAJES E INICIO PARA GUARDAR LA SESSION
session_start();
//MI CONEXION A MI BASE DE DATOS
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud_tareas'
);

//ESTA LINEA SOLO COMPRUEBA SI MI BASE DE DATOS ME ESTA CONECTANDO CORRECTAMENTE
/*if(isset($conn)){
    echo "Conectandome a mi base de datos correctamente";
}else{
    echo "Error al conectarme a mi Base de datos";
}*/
?>