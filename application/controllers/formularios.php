<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formularios extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->country = '';//Creacion de variable para el catalo de paises
		$this->instu = '';
		$this->profes = '';
		$this->load->model('reg_model');//Carga de Modelo
		$this->country = $this->reg_model->pais();//peticion a la funcion pais
		$this->instu = $this->reg_model->institucion();
		$this->profes = $this->reg_model->profesor();
	}
	public function index(){
		//$this->load->view('newcontroller/bienvenido');
	}
	public function alta(){
		$datos['pais'] = $this->country;//Aqui se agrega el catalogo de paises que esta en la base de datos
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/altapro',$datos);
		$this->load->view('encabezados/down');
	}
	////HASTA AQUI LLEGUE, PASATE A INSERTAR
	public function labores(){
		$datos2['institucion'] = $this->instu;
		$datos3['profesor'] = $this->profes;
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/laboral', $datos2 + $datos3);
		$this->load->view('encabezados/down');
	}

	public function gestion(){
		$datos3['profesor'] = $this->profes;
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/gestiona', $datos3);
		$this->load->view('encabezados/down');
	}

	public function lgac(){
		$datos3['profesor'] = $this->profes;
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/lgacs', $datos3);
		$this->load->view('encabezados/down');
	}

	public function premios(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/premio');
		$this->load->view('encabezados/down');
	}

	public function producc(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/academica');
		$this->load->view('encabezados/down');
	}

	public function proy(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/proyectos');
		$this->load->view('encabezados/down');
	}

	public function tuto(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/tutorias');
		$this->load->view('encabezados/down');
	}

	public function direc(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/individualizada');
		$this->load->view('encabezados/down');
	}

	public function estudios(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/estudiosr');
		$this->load->view('encabezados/down');
	}

	public function docencia(){
		$this->load->view('encabezados/up');
		$this->load->view('encabezados/lateral');
		$this->load->view('agregar/docenci');
		$this->load->view('encabezados/down');
	}
}
?>