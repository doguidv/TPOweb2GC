   <!-- // imprime la tabla de categoria  con la localidad-->
   <h2> Listado de categoria</h1>
   <table>
           <thead>
           <tr>
               <th>id_localidad</th>
               <th>Localidad</th>
               </tr>
           <thead>
           <tbody>
   
           {foreach from=$categ item=$categs }
               <tr>
                   <td>{$categ->id_localidad}</td>
                   <td>{$categ->localidad}</td>
               </tr>
           {/foreach}            
           </tbody>
        </thead>            
   </table>