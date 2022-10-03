                           <!-- UPDATE CATEG-->


                           <form action="editCateg" method="POST" class="my-4">
                           <div class="row">
                                       <div class="col-9">
                               
                           
                                   <div class="form-group">
                                       <label>Agregue localidad</label>
                                       <input name="localidad" type="text" value="{$Categ->localidad}" class="form-control">
                                       <td><input type = "hidden" name= "id_localidad" value="{$Categ->id_localidad}"></td>
                                   </div>
                           
                               </div>
                           </div>
                           <button type="submit" class="btn btn-primary mt-2">Modificar Localidad</button>
                           </form>