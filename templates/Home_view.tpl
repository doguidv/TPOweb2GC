{include file="header.tpl"}
<h1>Informacion listada por categoria</h1>
{include file="SearchCateg.tpl"}
<table>

    <thead>
        <tr>
            <th>Embarcado</th>
            <th>Embarcacion</th>
            <th>Equipo de pesca</th>
            <th>Carnada</th>
            <th>Pesca</th>
            <th>Localidad</th>
            </tr>
    </thead>
    <tbody> 
    {foreach from=$pesca item=$pescas }  
    <tr>
        <td>{$pescas->embarcado}</td>
        <td>{$pescas->tipo_embarcacion}</td>
        <td>{$pescas->equipo_pesca}</td>
        <td>{$pescas->carnada}</td>
        <td>{$pescas->pesca}</td>
        <td>{$pescas->localidad}</td>
        <td><a href='Detalle/{$pescas->id_pesca}' type='button' class='btn btn-danger ml-auto'>Ver detalle</a>
     </tr>
     {/foreach}
     </tbody>
</table>

