<?php  if(isset($_SESSION['identity'])):?>
<div id="formulario">
    <h3>Formulario</h3>
    <form action="<?=base_url?>formulario/add" method="post">
            <label for="equipo">Numero de equipo: </label>
            <input type="number" name="equipo" required/>
        
        <select for="turno" name="turno">
            <option value="dia">dia</option>
            <option value="noche">noche</option>
        </select>
        
        <label for="petroleo">petroleo: </label>
        <input type="text" name="petroleo" required/>
        
        <label for="horometroi">horometro inicial: </label>
        <input type="number" name="horometroi" required/>
        
        <label for="horometrof">horometro final: </label>
        <input type="number" name="horometrof" required/>
  
        <input type="submit" value="guardar"/>
    </form>
                        
</div>
<?php else:?>
necesitas estar registrado
<?php endif; ?>
