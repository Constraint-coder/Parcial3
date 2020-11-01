<?php  include("db_tarea.php"); 


  if(isset($_GET['idtarea'])) {
    $idtarea = $_GET['idtarea'];
    $query = "SELECT * FROM tareas WHERE idtarea=$idtarea";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $titulo = $row['titulo'];
      $fecha_registro= $row['fecha_registro'];
      $descripcion = $row['descripcion'];

   
      
    }
  }

  if(isset($_POST['actualizar'])){
    $idtarea = $_GET['idtarea'];
    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    $fecha_registro = $row['fecha_registro'];
    $materia = $_POST['materia'];

    $query = "UPDATE tareas set titulo = '$titulo', descripcion = '$descripcion', fecha_registro = '$fecha_registro' WHERE idtarea=$idtarea";
    mysqli_query($conn, $query);
    $_SESSION['mensaje'] = 'Datos Actualizados';
    $_SESSION['mensaje_tipo'] = 'warning';
    header('Location: index_tarea.php');

  }
echo $titulo
?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card card-body">

      <!--AQUI VA EL FORMULARIO ACTUALIZAR-->
        <?php //include("formulario_alumno_actualizar.php"); ?>

        <form action="editar_tarea.php?idtarea=<?php echo $_GET['idtarea']; ?>" method="post">
    <div class="form-group">
        <label for="">Titulo: </label>    
        <input type="text" name="titulo" class="form-control" placeholder="titulo" autofocus required value="<?php echo $titulo ; ?>">
    </div>

    
    <div class="form-group">
    <label for="">Descripcion: </label>
    <textarea class="form-control" name="descripcion"  rows="2" placeholder="Descripcion" required>
    <?php echo $descripcion; ?>
    </textarea>
    </div>

    <div class="form-group">
        <label for="" class="">Fecha: </label>    
        <input type="date" name="fecha" class="form-control" required value="<?php echo $fecha_registro; ?>">
    </div>


       <div class="form-group">
        <label for="">Materias </label>    
        <select name="materia" class="form-control">
        <option selected>-Seleccione una materia-</option>
            <option value="Programacion Orientada a Obejetos">Programacion Orientada a Obejetos</option>
            <option value="Ingenieria de Software">Ingenieria de Software</option>
            <option value="Ingles Tecnico">Ingles Tecnico</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Tecnnicas de Investigacion">Tecnnicas de Investigacion</option>
</select>
    </div>
    <button class="btn btn-success btn-block" name="actualizar">
    Actualizar
    </button>
    <!--<input type="submit" name="actualizar" class="btn btn-success btn-block" value="Actualizar Datos del Estudiante">-->
</form>


    </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>