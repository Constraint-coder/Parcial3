<?php
include("db_tarea.php");

if(isset($_GET['idtarea'])){

    $idtarea = $_GET['idtarea'];
    $query = "DELETE FROM tareas WHERE idtarea = $idtarea";
    $resultado = mysqli_query($conn,$query);
    if(!$resultado){
        die("Error al Eliminar los datos de nuestra BD");
    }else{
        $_SESSION['mensaje'] = "Tarea Eliminada con Exito";
        $_SESSION['mensaje_tipo'] = "danger";  
        header("Location:index_tarea.php");
    }
}
?>