	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h1>Gestión Académica</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Tipo</h4></div>
	   		<div class="div4"><h4>Cargo</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona el profesor</option>
	   			<? foreach ($profesor->result() as $profes ) {?>
					<option value="<?= $profes->cveProfesor?>" > <?= $profes->cveProfesor ?> <?= $profes->nombre ?> <?= $profes->apellidos ?> </option>
				<? } ?>
	   		</select></div>	   		
	   		<div class="div4">
	   			<select id="tipo" style="width: 220px;" onblur="validar2(this.id)"> 
	   			<option style="display:none">Selecciona el tipo</option>
	   			<option value="1">Individual</option>
	   			<option value="0">Colectivo</option>
	   			</select>
	   		</div>
	   		<div class="div4"> <input type="text" id="cargo" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>
	   		
	   			   		
	   		<div class="div4"><h4>Función</h4></div>
	   		<div class="div4"><h4>Órgano colegiado</h4></div>
	   		<div class="div4"><h4>Aprobado</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><textarea id="fun" onblur="validar2(this.id)"></textarea></div>	   		
	   		<div class="div4"><textarea id="cole" onblur="validar2(this.id)"></textarea></div>	   		
	   		<div class="div4"><select style="width: 190px;" id="apro" onblur="validar2(this.id)">
	   		<option style="display:none">Opciones</option>
	   				<option value="1">Si</option>
	   				<option value="0">No</option>
	   			</select>
	   		</div>	   		
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Resultados</h4></div>
	   		<div class="div4"><h4>Terminada</h4></div>
	   		<div class="div4"><h4>Fecha de inicio de gestión</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><textarea id="resul"></textarea></div>	   		
	   		<div class="div4"><select style="width: 190px;" id="term" onblur="validar2(this.id)">
	   		<option style="display:none">Opciones</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div4"><input style="width: 190px;" placeholder="aaaa/mm/dd" type="date" id="feciges" onblur="validar2(this.id)" required></div>
	   		<div class="div12"></div>
	   		
	   		
	   		<div class="div4"><h4>Fecha de término<br>de gestión</h4></div>
	   		<div class="div4"><h4>Fecha de último informe</h4></div>
	   		<div class="div4"><h4>Horas a la semana</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input style="width: 190px;" placeholder="aaaa/mm/dd" type="date" id="fectges" onblur="validar2(this.id)" required=""></div>
	   		<div class="div4"> <input style="width: 190px;" placeholder="aaaa/mm/dd" type="date" id="fecuinfo" onblur="validar2(this.id)"></div>
	   		<div class="div4"><input placeholder="solo numero" type="text" id="hra" onblur="validar2(this.id)" required></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="gestionacademica(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
