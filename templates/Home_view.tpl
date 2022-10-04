{include file="header.tpl"}
<h1>Informacion listada por categoria</h1>
<p1> Filtrar por Categoria</p1>
<select name='id_localidad_fk' class='from_control'>          
            {foreach from=$pesca item=$pescA}
         <option value="{$pescA->id_localidad_fk}">{$pescA->id_localidad_fk}-{$pescA->localidad}</option>
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
{if  {$pescas->localidad} =={{$pescA->localidad}}}
    <tr>
        <td>{$pescas->embarcado}</td>
        <td>{$pescas->tipo_embarcacion}</td>
        <td>{$pescas->equipo_pesca}</td>
        <td>{$pescas->carnada}</td>
        <td>{$pescas->pesca}</td>
        <td>{$pescas->localidad}</td>        
        <td>{$pescas->id_localidad_fk}</td>
     </tr>
    
{/if}
     {/foreach}
     </tbody>
</table>

