<form action="Buscar" method="POST" class="my-4">
    <select name='id_localidad' class='from_control'>          
                {foreach from=$categ item=$pescA}
            <option value="{$pescA->id_localidad}">{$pescA->id_localidad}-{$pescA->localidad}</option>                 
            {/foreach}
        </select>
        <button type="submit" class="btn btn-primary mt-2">Buscar</button> 
    </form>