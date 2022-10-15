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
    {if $error} 
        <div class="alert alert-danger mt-3">
            {$error}
        </div>
    {/if}
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>


 