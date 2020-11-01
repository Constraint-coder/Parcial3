<?php
include("db_tarea.php");
if(isset($_POST['registrar'])){
$idtarea= $_POST['idtarea'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_registro = $_POST['fecha_registro'];
$materia = $_POST['materia'];

 $query = "INSERT INTO tareas
 (idtarea,titulo,descripcion,fecha_registro,materia) 
 VALUES('$idtarea','$titulo','$descripcion','$fecha_registro','$materia')";

 $resultado = mysqli_query($conn,$query);

 if(!$resultado){
    die("QUERY ERROR");
 }else{  
    $_SESSION['mensaje'] = 'Tarea '.$titulo.' Registrado Satisfactoriamente';
    $_SESSION['mensaje_tipo'] = 'success';
    //echo "Guardado";
    header("Location: index_tarea.php");
}

}
?>