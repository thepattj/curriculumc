	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Proyectos de investigación</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Título</h4></div>
	   		<div class="div4"><h4>Nombre del patrocinador</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona el profesor</option>
	   			<?/*php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } */?>
	   		</select></div>	   		
	   		<div class="div4"><textarea id="tit" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div4"><input placeholder="" type="text" id="pat" onblur="validar2(this.id)" required></div>
	   		<div class="div12"></div>
	   		
	   			   		
	   		<div class="div4"><h4>Fecha de inicio del proyecto</h4></div>
	   		<div class="div4"><h4>Fecha de fin del proyecto</h4></div>
	   		<div class="div4"><h4>Patrocinador interno</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input placeholder="aaaa/mm/dd" style="width: 190px;" type="date" id="fecip"></div>
	   		<div class="div4"> <input placeholder="aaaa/mm/dd" style="width: 190px;" type="date" id="fecfp"></div>
	   		<div class="div4"><select style="width: 190px;" id="patroc" onblur="validar2(this.id)">
	   		<option value="1">Si</option>
	   			<option value="0">No</option></select></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Investigadores</h4></div>
	   		<div class="div4"><h4>Alumnos</h4></div>
	   		<div class="div4"><h4>Actividades</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><textarea id="inves"></textarea></div>
	   		<div class="div4"><textarea id="alum"></textarea> </div>
	   		<div class="div4"><textarea id="act"></textarea></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div6"><h4>Miembros</h4></div>
	   		<div class="div6"><h4>Lineas de Generación o<br>Aplicación innovadora del Conocimiento</h4></div>
	   		<div class="div12"></div>
	   		<div class="div6"> <input style="width: 350px;" type="text" id="mien"></div>
	   		<div class="div6"> <input style="width: 350px;" type="text" id="lgaic"></div>

	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="investigacion(this.form)">Guardar</button>	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
