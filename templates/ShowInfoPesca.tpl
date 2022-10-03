              
{include file="header.tpl"}           
{include file="Add_info.tpl"}

<table>
                        <thead>
                        <tr>
                            <th>id_pesca</th>
                            <th>Embarcado</th>
                            <th>Embarcacion</th>
                            <th>Equipo de pesca</th>
                            <th>Carnada</th>
                              <th>Pesca</th>

                              <th>localidad_fk</th>

                              <th>localidad</th>
                              </tr>
                        <thead>
                        <tbody>
                    
                {foreach from=$pesca item=$pescas}
                    
                        <tr>
                            <td>{$pescas->id_pesca}</td>
                            <td>{$pescas->embarcado}</td>
                            <td>{$pescas->tipo_embarcacion}</td>
                            <td>{$pescas->equipo_pesca}</td>
                            <td>{$pescas->carnada}</td>
                            <td>{$pescas->pesca}</td>
                            <td>{$pescas->id_localidad_fk}</td> 
                            <td>{$pescas->localidad}</td>    
                            <td><a href='update/{$pescas->id_pesca}' type='button' class='btn btn-danger ml-auto'>modificar</a>
                            <a href='delete/{$pescas->id_pesca}' type='button' class='btn btn-danger ml-auto'>Borrar</a> </td>
                        </tr>
                 {/foreach}
                         </tbody>
                          
    </table>
    