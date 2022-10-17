   
<table>
    <thead>
        <tr>
        <th>id_pesca</th>
        <th>Embarcado</th>
        <th>Embarcacion</th>
        <th>Equipo de pesca</th>
        <th>Carnada</th>
        <th>Pesca</th>
        <th>Detalles</th>
        <th>localidad_fk</th>
        <th>localidad</th>
        </tr>
    <thead>
        <tbody>                    
                {foreach from=$pesca item=$pescas}                  
                        <tr>
                            <td>{$pescas->id_pesca}</td>
                            <td>{$pescas->embarcado|truncate:5}</td>
                            <td>{$pescas->tipo_embarcacion|truncate:10}</td>
                            <td>{$pescas->equipo_pesca|truncate:20}</td>
                            <td>{$pescas->carnada|truncate:10}</td>
                            <td>{$pescas->pesca|truncate:20}</td>
                            <td>{$pescas->Detalles_Pesca|truncate:25}</td> 
                            <td>{$pescas->id_localidad_fk|truncate:25}</td> 
                            <td>{$pescas->localidad}</td>                               
                            <td><a href='update/{$pescas->id_pesca}' type='button' class='btn btn-danger ml-auto'>modificar</a>
                            <a href='delete/{$pescas->id_pesca}' type='button' class='btn btn-danger ml-auto'>Borrar</a> </td>
                        </tr>
                 {/foreach}
                 </tbody>
</table>
    