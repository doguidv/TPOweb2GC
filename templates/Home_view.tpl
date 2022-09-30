<h1>Informacion listada por categoria</h1>
<table>
<thead>
<tr>
    <th>id_pesca</th>
    <th>Embarcado</th>
    <th>Embarcacion</th>
    <th>Equipo de pesca</th>
    <th>Carnada</th>
    <th>Pesca</th>
    <th>Localidad</th>
    </tr>
<thead>
<tbody>

{foreach from=$pesca item=$pescas }
    
    <tr>
    <td>{$pescas->id_pesca}</td>
    <td>{$pescas->embarcado}</td>
    <td>{$pescas->tipo_embarcacion}</td>
    <td>{$pescas->equipo_pesca}</td>
    <td>{$pescas->carnada}</td>
    <td>{$pescas->pesca}</td>
    <td>{$pescas->localidad}</td>
     </tr>

    {/foreach}

