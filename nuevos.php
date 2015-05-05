<!DOCTYPE html>
<html>
    <body>
         <div>
 
		<h1>Nuevo contacto</h1>
<fieldset>
              <form action="guardarr.php" method="POST">
                
                     <label for="txttitulo">TITULO</label><br/>
		     <input type="text" maxlength="100" id="txttitulo" name="titulo"/>
		      <br/>
		      <br/>
                    
                     <label for="txtContenido">CONTENIDO</label><br/>
                     <textarea name="contenido"></textarea>
                     <br/>
                     <br/>
                 
    			<label for="txtautor">AUTOR</label><br/>
                     <input type="text" size="40" maxlength="100" id="txtautor" name="autor" />
                     <br/>
                     <br/>
                     <label for="txtfecha">FECHA</label><br/>
                     <input type="text" size="40" maxlength="255" id="txtfecha" name="fecha" />
                     <br/>
                     <br/>

                 <input type="submit" name="enviar" value="Guardar" />
             </form>
         </div>
</fieldset>
    </body>
</html>
