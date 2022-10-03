{include file="header.tpl"}


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
<form action="editCateg" method="POST" class="my-4">
<div class="row">
            <div class="col-9">
    

        <div class="form-group">
            <label>Agregue localidad</label>
            <input name="localidad" type="text" value="{$Categ->localidad}" class="form-control">
        </div>

    </div>
</div>
<button type="submit" class="btn btn-primary mt-2">Modificar Localidad</button>
</form>
 