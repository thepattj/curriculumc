	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h1>Docencía</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form>
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Plan</h4></div>
	   		<div class="div4"><h4>Nivel de Estudio</h4></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona el profesor</option>
	   			<?/*php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } */?>
	   		</select></div>		
	   		<div class="div4"><select id="pln" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona el plan</option>
	   			<option value="INC11">INC11</option>
	   			<option value="SOF11">SOF11</option>
	   			<option value="TEL11">TEL11</option>
	   			<option value="LAT11">LAT11</option>
	   			<option value="INF11">INF11</option>
	   			<option value="ASE">Asesorías</option>
	   			<option value="POS">Posgrado</option>
	   		</select></div>
	   		<div class="div4"> <select id="nives" onblur="validar2(this.id)">
	   			<?/*php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el nivel</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } */?>
	   		</select></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Dependencia de educación<br>superior donde está registrado<br>el progrma educativo</h4></div>
	   		<div class="div4"><h4>Nombre del curso</h4></div>
	   		<div class="div4"><h4>Fecha de inicio</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><select id="inst" style="width: 190px;">
	   			<?/*php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona la Institución</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } */?>
	   		</select></div>	   		
	   		<div class="div4"><select style="width: 190px;" id="curs" onblur="validar2(this.id)">
	   			<?/*php $qri = "SELECT nombreCurso AS nombre, cveCurso AS clave FROM curso ORDER BY nombre ASC";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el Curso</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } */?>
	   		</select></div>	   		
	   		<div class="div4"><input style="width: 190px;" type="date" id="fecini"></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><h4>Numero de alumnos</h4></div>
	   		<div class="div4"><h4>Duración en semanas</h4></div>
	   		<div class="div4"><h4>Horas de asesoria al mes</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><input placeholder="solo numero" type="text" id="alumnos"></div>
	   		<div class="div4"><input placeholder="solo numero" type="text" id="durar"></div>
	   		<div class="div4"><input placeholder="solo numero" type="text" id="mesase"></div>	   		
	   		<div class="div12"></div>

	   		<div class="div4"></div><div class="div4"><h4>Horas semanales dedicadas<br>al curso</h4></div><div class="div4"></div><div class="div12"></div>
	   		<div class="div4"></div><div class="div4"><input placeholder="solo numero" type="text" id="hracurso"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="doce(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
