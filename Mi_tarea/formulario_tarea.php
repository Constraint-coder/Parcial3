<form action="guardar_tarea.php" method="post">
    <div class="form-group">
        <label for="">Codigo Tarea: </label>    
        <input type="text" name="idtarea" class="form-control" placeholder="codigo" autofocus required>
    </div>

    <div class="form-group">
    <label for="">Titulo tarea: </label>
    <textarea class="form-control" name="titulo"  placeholder="titulo" required></textarea>
    </div>

   

    <div class="form-group">
    <label for="">Descripcion tarea: </label>
    <textarea class="form-control" name="descripcion"  placeholder="descripcion" required></textarea>
    </div>

     <div class="form-group">
        <label for="" class="">Fecha: </label>    
        <input type="date" name="fecha_registro" class="form-control" required>
    </div>

    
    <div class="form-group">
        <label for="">Materia: </label>    
        <select name="materia" class="form-control">
        <option selected>-Seleccione Materia-</option>

            <option value="Programacion Orientada a Obejetos">Programacion Orientada a Obejetos</option>
            <option value="Ingenieria de Software">Ingenieria de Software</option>
            <option value="Ingles Tecnico">Ingles Tecnico</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Tecnnicas de Investigacion">Tecnnicas de Investigacion</option>
</select>
    </div>
    
    <input type="submit" name="registrar" class="btn btn-success btn-block" value="Registrar Tarea">
</form>



