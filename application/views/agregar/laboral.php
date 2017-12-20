	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div12">
			<h1>Datos laborales dentro de la Institución</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"> <h4>Clave de profesor</h4> </div>
	   		<div class="div4"> <h4>Institución</h4> </div>
	   		<div class="div4"> <h4>Tipo de Contratación</h4> </div>
	   		<div class="div12"></div>

	   		<div class="div4"> <select style="width: 200px;" name="clave" id="clv" onblur="validar2(this.id)">

	   			<option style="display: none;">Seleeciona el profesor</option>
	   			<? foreach ($profesor->result() as $profes ) {?>
					<option value="<?= $profes->cveProfesor?>" > <?= $profes->cveProfesor ?> <?= $profes->nombre ?> <?= $profes->apellidos ?> </option>
				<? } ?>
	   			
	   		</select></div>
	   		<div class="div4"> <select style="width: 200px;" name="instituciones" id="inst" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona la Institución</option>
	   			<?foreach ($institucion->result() as $instu ) {?>
					<option value="<?= $instu->cveInstitucion;?>" > <?= $instu->nombreInst ?> </option>
				<? } ?>
	   		</select></div>	   		
	   		<div class="div4"> <input name="tnombramiento" placeholder="Tipo de nombramiento" style="width: 200px;" type="text" id="cont" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Nombramiento</h4></div>
	   		<div class="div4"> <h4>Dedicación</h4></div>
	   		<div class="div4"> <h4>Dependencia de Educación<br>Superior de Adscripción</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input name="nombramiento" type="text" id="nob" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <input name="dedicacion" type="text" id="dedi" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <input name="dependencia" type="text" id="depen" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Unidad académica</h4></div>
	   		<div class="div4"> <h4>Fecha de inicio del contrato</h4></div>  
	   		<div class="div4"> <h4>Fecha de fin del contrato</h4></div> 		
	   		<div class="div12"></div>

	   		<div class="div4"> <input name="unidad" type="text" id="uni" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <input name="inicioc" style="width: 200px;" type="date" id="fecini" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <input name="finc" style="width: 200px;" type="date" id="fecfin" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>
	   		
	   		
	   		<div class="div4"></div>
	   		<div class="div4"> <h4>Cronología</h4></div>
	   		<div class="div4"></div>
	   		<div class="div12"></div>
	   		<div class="div4"></div>
	   		<div class="div4"> <input id="crono" type="text" name="crono" onblur="validar2(this.id)"></div><div class="div4"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="laboral(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
