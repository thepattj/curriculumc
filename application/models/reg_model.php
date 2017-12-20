<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reg_model extends CI_Model {
	function __construct(){
		parent::__construct();
		//como se carga aqui la db?
		//die('Hola');
	}
	//CARGA DE CATALOGOS DE LA BD
	function regristoProfesor($datos){
		$this->db->insert('profesor',$datos);
	}
	function pais(){
		$query = $this->db->get('pais');
		//die(var_dump($query));
		return $query;
	}

	function institucion(){
		$query = $this->db->get('institucion');
		//die(var_dump($query));
		return $query;
	}

	function profesor(){
		$query = $this->db->get('profesor');
		//die(var_dump($query));
		return $query;
	}

	//INSERCION DE DATOS
	function crearMaestro($informacion){
		$this->db->insert('profesor',$informacion);
	}
	//PASATE A INSERTAR
	function crearDatos($informacion){
		$this->db->insert('datoslaborales',$informacion);
	}
}
?>