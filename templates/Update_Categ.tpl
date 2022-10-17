{include file="header.tpl"}                         
                         <!-- UPDATE CATEG-->
<form action="editCateg" method="POST" class="my-4">
  <div class="row">
    <div class="col-9">                                              
      <div class="form-group">
        <label>Modifique la localidad</label>
        <input name="localidad" type="text" value="{$Categ->localidad}">
       <input type = "hidden" name= "id_localidad" value="{$Categ->id_localidad}">
      </div>                          
    </div>
  </div>

   <button type="submit" class="btn btn-primary mt-2" value="Modificar Localidad">Modificar Localidad</button>
 
</form>