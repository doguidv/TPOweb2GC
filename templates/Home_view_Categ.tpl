   {include file="header.tpl"}
   <!-- // imprime la tabla de categoria  con la localidad-->

   <h2> Listado de categoria</h1>
   <table>
        <thead>
           <tr>
               <th>Localidad</th>
               </tr>
           <thead>
           <tbody>   
           {foreach from=$categ item=$categs }
               <tr>        
                   <td>{$categs->localidad}</td>
               </tr>
           {/foreach}            
           </tbody>
        </thead>            
   </table>
   
{include file="footer.tpl"}