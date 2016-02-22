<?php

class Dependiente extends CI_Model{

	
	var $parentesco = '';

	/**
	* @var Persona
	*/
	var $Persona;

	

	function __construct(){
		parent::__construct();
		$this->load->model('saman/Persona', 'MPersona');
		$this->Persona = new $this->MPersona();

	}


	/**
	* Codigo : nropersona | personas	
	* @var string
	* @param Dependiente
	*/
	function consultar($oid, Persona $Persona){
		$sConsulta = 'SELECT * FROM pers_relaciones 
		INNER JOIN pers_relacs_tipo ON pers_relaciones.persrelstipcod=pers_relacs_tipo.persrelstipcod
		WHERE pers_relaciones.nropersonarel= ' . $oid . ' LIMIT 1';		
		$obj = $this->Dbsaman->consultar($sConsulta);
		$this->Persona->consultar('', $oid);		
		if($obj->code == 0){
			foreach ($obj->rs as $key => $val) {					
				$this->parentesco = strtoupper($val->persrelstipnombre);
			}
		}	
	}



	function __destruct(){
		unset($this->MPersona);
	}
}