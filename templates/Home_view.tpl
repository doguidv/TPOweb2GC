{include file="header.tpl"}
<h1>Informacion listada por categoria</h1>
<p1> Filtrar por Categoria</p1>
<select name='id_localidad' class='from_control'>          
            {foreach from=$categ item=$pescA}
         <option value="{$pescA->id_localidad}">{$pescA->id_localidad}-{$pescA->localidad}</option>
         {/foreach}
    </select>

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
{if  {$pescas->id_localidad_fk}=={{$pescA->id_localidad}}}
    <tr>
        <td>{$pescas->embarcado}</td>
        <td>{$pescas->tipo_embarcacion}</td>
        <td>{$pescas->equipo_pesca}</td>
        <td>{$pescas->carnada}</td>
        <td>{$pescas->pesca}</td>
        <td>{$pescas->localidad}</td>
     </tr>
    
{/if}
     {/foreach}
     </tbody>
</table>

