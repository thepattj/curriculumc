	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Lineas de generación o Aplicación innovadora del conocimiento</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Campo</h4></div>
	   		<div class="div4"><h4>Actividades</h4></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona el profesor</option>
	   			<?foreach ($profesor->result() as $profes ) { ?>
					<option value="<?= $profes->cveProfesor?>" > <?= $profes->cveProfesor ?> <?= $profes->nombre ?> <?= $profes->apellidos ?> </option>
				<? } ?>
	   		</select></div>		
	   		<div class="div4"> <textarea id="campo" onblur="validar2(this.id)"> </textarea></div>	   		
	   		<div class="div4"><input placeholder="" type="text" id="act" onblur="validar2(this.id)" required></div>
	   		<div class="div12"></div>


	   		<div class="div4"></div><div class="div4"><h4>Horas</h4></div><div class="div4"></div>
	   		<div class="div12"></div>
	   		<div class="div4"></div><div class="div4"><input type="text" id="hrs" onblur="validar2(this.id)"></div>
	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="aplicacion(this.form)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>