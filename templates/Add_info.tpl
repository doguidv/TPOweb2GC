
                 <!-- ADD Info-->
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
    