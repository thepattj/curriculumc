<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insertar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('reg_model');
	}

	public function aprofesor(){
		$info = array(
			'cveProfesor' => $this->input->post('clave'),
			'nombre' => $this->input->post('nombre'),
			'apellidos' => $this->input->post('apellido'),
			'rfc' => $this->input->post('rfc'),
			//ESTA VARIABLE NO ES UN INPUT ES UN SELECT SE CAMBIA?????
			'genero' => $this->input->post('sexo'),
			'curp' => $this->input->post('curp'),
			'entidadNacimiento' => $this->input->post('entidad'),
			'fechaNac' => $this->input->post('cumple'),
			'telefonoProfesor' => $this->input->post('tparticular'),
			'telefonoTrabajo' => $this->input->post('ttrabajo'),
			'email' => $this->input->post('correo1'),
			'emailAdicional' => $this->input->post('correo2'),
			'tienePromep' => $this->input->post('promepres'),
			'fechaPromep' => $this->input->post('fechapromep'),
			'tieneSNI' => $this->input->post('snires'),
			'fechaSNI' => $this->input->post('fecsni'),
			'areaDedica' => $this->input->post('area'),
			'disciplinaDedica' => $this->input->post('disciplina'),
			'ext' => $this->input->post('extension'),
			'idpais' => $this->input->post('pais'),
			'idEdoCivil' => $this->input->post('ecivil')
		);
		$this->reg_model->crearMaestro($info);
		//redirect('formularios/alta');
		//SE PUEDE MANDAR SOLO A LLAMAR A LA FUNCION QUE SE TIENE LAS VISTA?
		//$this->formularios->alta()
	}
	//HASTA AQUI LLEGUE, EN EL AGREGAR DATOS LABORALES
	public function adatos(){
		$info=array(
			'dedicacion' => $this->input->post('dedicacion'),
			'tipoNombramiento' => $this->input->post('tnombramiento'),
			'dependencia' => $this->input->post('dependencia'),
			'unidadAcademica' => $this->input->post('unidad'),
			'inicioContrato' => $this->input->post('inicioc'),
			'finContrato' => $this->input->post('finc'),
			'cronologia' => $this->input->post('crono'),
			'nombramiento' => $this->input->post('nombramiento'),
			'cveProfesor' => $this->input->post('clave'),
			'cveInstitucion' => $this->input->post('instituciones')
			);
		$this->reg_model->crearDatos($info);
	}
	//redirect('formularios/labores');

}
?>