<!--Tabla Filtro -->
{include file="header.tpl"}
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
    {foreach from=$InfopXLocalidad item=$InfopXLocalidades }  
    <tr>
     <td>{$InfopXLocalidades->embarcado|truncate:5}</td>
    <td>{$InfopXLocalidades->tipo_embarcacion|truncate:10}</td>
    <td>{$InfopXLocalidades->equipo_pesca|truncate:20}</td>
    <td>{$InfopXLocalidades->carnada|truncate:20}</td>
    <td>{$InfopXLocalidades->pesca|truncate:20}</td>
    <td>{$InfopXLocalidades->Detalles_Pesca|truncate:25}</td> 
    <td>{$InfopXLocalidades->localidad|truncate:25}</td>
        </tr>
     {/foreach}
     </tbody>
</table>