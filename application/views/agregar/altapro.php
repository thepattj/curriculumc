	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">

		<div class="div7"> <h1>Registro de Profesores</h1> </div>
		<div class="div12"></div>

	    <form action="<?=base_url()?>insertar/aprofesor" method="POST">
	    	<div class="div4"> <h4>Clave de profesor</h4> </div>
	   		<div class="div4"> <h4>Nombre</h4> </div>
	   		<div class="div4"> <h4>Apellidos</h4> </div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input placeholder="Obligatorio" type="text" name="clave" id="clv" onblur="validar2(this.id)" > </div>
	   		<div class="div4"> <input type="text" placeholder="Nombre(es)" name="nombre" id="namec"> </div>
	   		<div class="div4"> <input type="text" placeholder="A.Paterno A.Materno" name="apellido" id="seco"> </div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Genero</h4> </div>
	   		<div class="div4"> <h4>CURP</h4> </div>
	   		<div class="div4"> <h4>RFC</h4> </div>

	   		<div class="div4"> <select style="width: 200px;" id="sex" name="sexo" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona el Genero</option>
	   			<option value="1">Masculino</option>
	   			<option value="0">Femenino</option>
	   		</select> </div>
	   		<div class="div4"> <input placeholder="18 digitos" type="text" id="curp" name="curp" onblur="validar2(this.id)"> </div>	
	   		<div class="div4"> <input type="text" placeholder="13 digitos" id="rfc" name="rfc" onblur="validar2(this.id)"> </div>   		
	   		<div class="div12"></div>


	   		<div class="div4"> <h4>Estado Civil</h4> </div>
	   		<div class="div4"> <h4>Fecha de Nacimiento</h4> </div>
	   		<div class="div4"> <h4>País</h4> </div>
	   		<div class="div12"></div>

	   		<div class="div4"> <select name="ecivil" style="width: 200px;" id="estado" onblur="value(this.id)">
	   			<option style="display: none;">Selecciona el Estado Civil</option>
	   			<option value="1">Soltero</option>
	   			<option value="2">Casado</option>
	   			<option value="3">Divorciado</option>
	   			<option value="4">Viudo</option>
	   		</select></div>
	   		<div class="div4"> <input style="width: 200px;" type="date" name="cumple" id="nac" onblur="value(this.id)"></div>
			<div class="div4"> <select style="width: 200px" id="pais" name="pais" onblur="value(this.id)">
				<option style="display:none;">Seleciona tu pais</option>
				<? foreach ($pais->result() as $country ) {?>
					<option value="<?= $country->idPais;?>"> <?= $country->nombrePais?> </option>
				<? } ?>
			</select></div>	   		
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Entidad de nacimiento</h4> </div>
	   		<div class="div4"> <h4>Teléfono Particular</h4> </div>
	   		<div class="div4"> <h4>Teléfono Trabajo</h4> </div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input type="text" placeholder="Estado, Condado" id="entidad" name="entidad" onblur="validar2(this.id)"> </div>
	   		<div class="div4"> <input type="text" name="tparticular" placeholder="ej.111-111-1111" onblur="validar2(this.id)" > </div>
	   		<div class="div4"> <input class="div5" name="ttrabajo" type="text" id="tel2" placeholder="(111-111-1111)" onblur="validar2(this.id)" > 
	   							<input class="div2" name="extension" type="text" id="exten" placeholder="ext."></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Correo Electrónico</h4> </div>
	   		<div class="div4"> <h4>Correo Electrónico</h4><h5>Personal o alterno</h5> </div>
	   		<div class="div4"> <h4>Disciplina a la que se Dedica</h4> </div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input style="width: 200px; height: 25px;" placeholder="ejemplos@servidor.com" type="mail" id="correo" name="correo1" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <input style="width: 200px; height: 25px;" placeholder="ejemplos@servidor.com" type="mail" id="correoa" name="correo2" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <input placeholder="ej. Ciencias Politicas" type="text" name="disciplina" id="ddedica" onblur="validar2(this.id)"> </div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Área a la que se dedica</h4></div>
	   		<div class="div4"><h4>Tiene Promep</h4></div>
	   		<div class="div4"><h4>Fecha Promep</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input type="text" name="area" id="adedica" placeholder="ej. Ingenieria y Tecnologia" onblur="validar2(this.id)"></div>
	   		<div class="div4"> <select style="width: 200px;" name="promepres" id="respromep">
	   			<option style="display: none;">Selecciona la opción</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div4"> <input style="width: 200px;" type="date" name="fechapromep" id="fecpromep" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>

	   		<div class="div6"><h4>Tiene SNI</h4></div>
	   		<div class="div6"><h4>Fecha SNI</h4></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div6"> <select style="width: 350px;" id="resni" name="snires" onblur="validar2(this.id)">
	   			<option style="display: none;">Selecciona la opción</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div6"> <input style="width: 350px;" type="date" id="fecsni" name="fechasni" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" type="submite"> Guardar </button>  	

	    </form>
	</div>