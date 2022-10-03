{include file="form_ABM_Categ.tpl" assign=name var1=value}
<table>
<thead>
<tr>
    <th>id_localidad</th>
    <th>Localidad</th>
</tr>
<thead>
<tbody>
{foreach from=$localidades item=$localidad }{
        
    <tr>
        <td>{$localidad->id_localidad}</td>
        <td>{$localidad->localidad}</td>
    <td>  <a href='ShowUpdate/{$localidad->id_localidad}' type='button' class='btn btn-danger ml-auto'>modificar</a>
        <a href='deleteCateg/{$localidad->id_localidad}' type='button' class='btn btn-danger ml-auto'>Borrar</a></td>
    </tr>
}
    {/foreach}
</tbody>   
</table>
