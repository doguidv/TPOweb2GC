              
{include file="header.tpl"}           
                 <table>
                        <thead>
                        <tr>
                            <th>id_pesca</th>
                            <th>Embarcado</th>
                            <th>Embarcacion</th>
                            <th>Equipo de pesca</th>
                            <th>Carnada</th>
                              <th>Pesca</th>

                              <th>localidad_fk</th>

                              <th>localidad</th>
                              </tr>
                        <thead>
                        <tbody>
                    
                {foreach from=$pescas item=$pesca}
                    
                        <tr>
                            <td>{$pesca->id_pesca}</td>
                            <td>{$pesca->embarcado}</td>
                            <td>{$pesca->tipo_embarcacion}</td>
                            <td>{$pesca->equipo_pesca}</td>
                            <td>{$pesca->carnada}</td>
                            <td>{$pesca->pesca}</td>
                            <td>{$pesca->id_localidad_fk}</td> 
                            <td>{$pesca->localidad}</td>    
                            <td><a href='update/{$pesca->id_pesca}' type='button' class='btn btn-danger ml-auto'>modificar</a>
                            <a href='delete/{$pesca->id_pesca}' type='button' class='btn btn-danger ml-auto'>Borrar</a> </td>
                        </tr>
                 {/foreach}
                         </tbody>
                          
    </table>
    
    <form action="add" method="POST" class="my-4">
    <div class="row">
        
    <div class="col-9">
        
    <div class="col-3">
            <div class="form-group">
                <label>Pesca de embarcado</label>
                <select name="embarcado" class="form-control">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="col-9">
          
        <div class="col-3">
            <div class="form-group">
                <label>Tipo Embarcaciones</label>
                <select name="tipo_embarcacion" class="form-control">
                    <option value="embarcacionamotor">Embarcaciones a motor</option>
                    <option value="Kayak">Kayak</option>
                    <option value="costa">Pesca de costa</option>
                </select>
            </div>
        </div>
            <div class="form-group">
                <label>Equipo de pesca</label>
                <input name="equipo_pesca" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Carnada</label>
                <input name="carnada" type="text" class="form-control">
            </div>
            

            <div class="form-group">
                <label>Posible pesca</label>
                <input name="pesca" type="text" class="form-control">
            </div>
            
        </div>

        <div class="col-3">
            <div class="form-group">

    <select name='id_localidad_fk' class='from_control'> 
    
         
            {foreach from=$localidad item=$infoloc}
            <option value="{$infoloc->id_localidad}">{$infoloc->id_localidad}-{$infoloc->localidad}</option>
    
         {/foreach}
    </select>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
    
    <!--Update--> 

    <form method="POST" action= "editinfo";>
           
           
           
           
           
           
           
           
           
           
    <label>Pesca de embarcado</label>
        <select name="embarcado" class="form-control">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select> 
   
   
   
    <label>Tipo Embarcaciones</label>
        <select name="tipo_embarcacion" class="form-control">
            <option value="embarcacionamotor">Embarcaciones a motor</option>
            <option value="Kayak">Kayak</option>
            <option value="costa">Pesca de costa</option>
        </select>     
   
    <table>
        <tr>
         </tr>
        <tr>
           </tr>
        <td>Tipo  de embarcacion</td>
           
            <td><input type = "text" name= "equipo_pesca"  value="{$infop->equipo_pesca}"></td>
        </tr>
        <tr>
            <td>carnada</td>
            <td><input type = "text" name= "carnada"  value="{$infop->carnada}"></td>
        </tr>
        <tr>
            <td>pesca</td>
            <td><input type = "text" name= "pesca"  value="{$infop->id_localidad}"></td>
        </tr>
        <select name='id_localidad_fk' class='from_control'> 

             
        {foreach from=$localidad item=$infoloc}
    <option value="{$infoloc->id_localidad}">{$infoloc->id_localidad}-{$infoloc->localidad}</option>

{/foreach}
        <tr>
            <td><input type = "hidden" name= "id_pesca" value="{$infop->id_pesca}"></td>
        </tr>
       
        <tr> 
        <td><button><input type= "submit"   value=" Editar tarea"></button></td>
        </tr>
    </table>
</form>