	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Premios y distinciones</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Nombre del premio</h4></div>
	   		<div class="div4"><h4>Motivo</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona el profesor</option>
	   			<?/*php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php }*/?>
	   		</select></div>		
	   		<div class="div4"> <input type="text" id="premio" onblur="validar2(this.id)" required></div>	   	
	   		<div class="div4"> <textarea id="motivo" onblur="validar2(this.id)"></textarea></div>	   		
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Fecha de Obtención</h4></div>
	   		<div class="div4"><h4>Institución Otorgante</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input placeholder="aaaa/mm/dd" style="width: 190px;" type="date" id="fecob"></div>
	   		<div class="div4">
	   			<select id="insot" style="width: 190px;" onblur="validar2(this.id)">
	   				<?/*php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display:none">Instituciones</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } */?>
				</select></div>
			<div class="div4"> <input type="text" id="nueva" placeholder="Escribe el nombre la institución"></div>	   		

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="premios(this.form)">Guardar</button>
	   	
	   	</form>
	   	<div class="div12"></div>
	</div>