<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class CategView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        // inicializo Smarty
    }
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
                  <td>  <a href='ShowUpdate/$localidad->id_localidad' type='button' class='btn btn-danger ml-auto'>modificar</a>
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
                        <input name="localidad" type="text"class="form-control">
                    </div>
        
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
        <?php
}

function UpdateCateg($Categ){
    include './templates/header.php';?>
<form action="editCateg" method="POST" class="my-4">
<div class="row">
            <div class="col-9">
    

        <div class="form-group">
            <label>Agregue localidad</label>
            <input name="localidad" type="text" value="<?php echo $Categ->localidad; ?>" class="form-control">
        </div>

    </div>
</div>
<button type="submit" class="btn btn-primary mt-2">Modificar Localidad</button>
</form>
<?php
}
}