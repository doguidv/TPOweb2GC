<?php

class CategView {

    function showlocalid($localidades) {
     
       // imprime la tabla de peliculas
                echo "<table>
                <thead>
                <tr>
                    <th>id_localidad</th>
                    <th>Localidad</th>
                </tr>
                <thead>
                <tbody>
                ";
                foreach($localidades as $localidad) {
                echo "
                <tr>
                    <td>$localidad->id_localidad</td>
                    <td>$localidad->localidad</td>
                  <td>  <a href='updatelocalid/$localidad->id_localidad' type='button' class='btn btn-danger ml-auto'>modificar</a>
                    <a href='deleteCateg/$localidad->id_localidad' type='button' class='btn btn-danger ml-auto'>Borrar</a></td>
                </tr>
                ";
                }
                echo " </tbody>   
                </table>";
                    
            }
        
            function addCateg(){
                include './templates/header.php';?>
            <form action="addCateg" method="POST" class="my-4">
            <div class="row">
                        <div class="col-9">
                
        
                    <div class="form-group">
                        <label>Agregue localidad</label>
                        <input name="localidad" type="text" class="form-control">
                    </div>
        
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
        <?php
}
}