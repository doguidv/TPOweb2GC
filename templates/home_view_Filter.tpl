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
        <td>{$InfopXLocalidades->embarcado}</td>
        <td>{$InfopXLocalidades->tipo_embarcacion}</td>
        <td>{$InfopXLocalidades->equipo_pesca}</td>
        <td>{$InfopXLocalidades->carnada}</td>
        <td>{$InfopXLocalidades->pesca}</td>    
        <td>{$InfopXLocalidades->localidad}</td>  

        </tr>
     {/foreach}
     </tbody>
</table>