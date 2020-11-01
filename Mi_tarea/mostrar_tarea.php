
<form action="index_tarea.php" method="post">     

 <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>idtareas</th>
                    <th>titulo</th>
                    <th>descripcion</th>
                    <th>fecha_registro</th> 
                    <th>materia</th> 

                   
                </tr>
            </thead>
            <tbody>
                    <?php 
                     $query = "SELECT * FROM tareas";
                     $resultado_tabla= mysqli_query($conn,$query);
                     
                     while($row = mysqli_fetch_array($resultado_tabla)){?>
                        <tr>
                            <td><?php echo $row['idtarea']; ?></td>                        
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['fecha_registro']; ?></td>
                            <td><?php echo $row['materia']; ?></td>
                     
                            <td>
                               <a href="editar_tarea.php?idtarea=<?php echo $row['idtarea'];?>" class="btn btn-secondary">
                                Editar
                                </a>
                              <a href="eliminar_tarea.php?idtarea=<?php echo $row['idtarea'];?>" class="btn btn-danger">
                                Eliminar
                                </a>
                            </td>
                        </tr>
                     <?php } ?>
            </tbody>
        </table>

        <script type="text/javascript">
        "<input type="submit" name="imprimir" class="btn btn-success btn-block" value="Imprimir Todas mis tareas">"
$(document).ready( function () {
    $('usuarios').DataTable();

     dom: 'Bfrtip'

    buttons: [
        'print'
    ]


} );
   </script>
        <div style="">

 
       


    

             

            </div>
</form>
        


