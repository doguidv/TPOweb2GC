        {include file="header.tpl"} 
   
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
         <td><input type = "text" name= "pesca"  value="{$infop->pesca}"></td>
     </tr>
     <select name='id_localidad_fk' class='from_control'>          
         {foreach from=$localidad item=$infop}
         <option value="{$infop->id_localidad}">{$infop->id_localidad}-{$infop->localidad}</option>
        {/foreach}
     </select>
        <tr>
         <td><input type = "hidden" name= "id_pesca" value="{$infop->id_pesca}"></td>
     </tr>
    
     <tr> 
     <td><button><input type= "submit"   value="Modificar Info Pesca"></button></td>
     </tr>
 </table>
</form>