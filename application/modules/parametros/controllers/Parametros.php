<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametros extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("parametros_model");
		$this->load->model("general_model");
		$this->load->helper('form');
    }
		
	/**
	 * Lista de lugares
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function lugares()
	{
			$this->load->model("general_model");
			$arrParam = array(
				"table" => "param_lugares",
				"order" => "sede",
				"id" => "x"
			);
			$data['info'] = $this->general_model->get_basic_search($arrParam);
			
			$data["view"] = 'lugares';
			$this->load->view("layout", $data);
	}
	
    /**
     * Cargo modal - formulario lugares
     * @since 12/3/2019
     */
    public function cargarModalLugar() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idLugar"] = $this->input->post("idLugar");	
			
			if ($data["idLugar"] != 'x') {
				$this->load->model("general_model");
				$arrParam = array(
					"table" => "param_lugares",
					"order" => "id_param_lugares",
					"column" => "id_param_lugares",
					"id" => $data["idLugar"]
				);
				$data['information'] = $this->general_model->get_basic_search($arrParam);
			}
			
			$this->load->view("lugares_modal", $data);
    }
	
	/**
	 * Update lugar
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function save_lugar()
	{			
			header('Content-Type: application/json');
			$data = array();
			
			$idLugar = $this->input->post('hddId');
			
			$msj = "Se adicionó un nuevo Lugar";
			if ($idLugar != '') {
				$msj = "Se editó un Lugar";
			}

			if ($idLugar = $this->parametros_model->saveLugar()) {
				$data["result"] = true;
				$data["idRecord"] = $idLugar;
				
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$data["idRecord"] = "";
				
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);
    }
	
	/**
	 * Lista de programas
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function programas()
	{
			$this->load->model("general_model");
			$arrParam = array(
				"table" => "param_programas",
				"order" => "escuela",
				"id" => "x"
			);
			$data['info'] = $this->general_model->get_basic_search($arrParam);
			
			$data["view"] = 'programas';
			$this->load->view("layout", $data);
	}
	
    /**
     * Cargo modal - formulario programas
     * @since 12/3/2019
     */
    public function cargarModalPrograma() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idPrograma"] = $this->input->post("idPrograma");	
			
			if ($data["idPrograma"] != 'x') {
				$this->load->model("general_model");
				$arrParam = array(
					"table" => "param_programas",
					"order" => "id_param_programas",
					"column" => "id_param_programas",
					"id" => $data["idPrograma"]
				);
				$data['information'] = $this->general_model->get_basic_search($arrParam);
			}
			
			$this->load->view("programas_modal", $data);
    }
	
	/**
	 * Update lugar
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function save_programa()
	{			
			header('Content-Type: application/json');
			$data = array();

			$idPrograma = $this->input->post('hddId');
			
			$msj = "Se adicionó un nuevo Programa";
			if ($idPrograma != '') {
				$msj = "Se editó un Programa";
			}

			if ($idPrograma = $this->parametros_model->savePrograma()) {
				$data["result"] = true;
				$data["idRecord"] = $idPrograma;
				
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$data["idRecord"] = "";
				
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);
    }
	
	/**
	 * Lista de asignaturas
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function asignaturas()
	{
			$this->load->model("general_model");
			$arrParam = array();
			$data['info'] = $this->general_model->get_asignaturas($arrParam);
			
			$data["view"] = 'asignaturas';
			$this->load->view("layout", $data);
	}
	
    /**
     * Cargo modal - formulario asignaturas
     * @since 12/3/2019
     */
    public function cargarModalAsignatura() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idAsignatura"] = $this->input->post("idAsignatura");	
			
			$arrParam = array(
				"table" => "param_programas",
				"order" => "programa",
				"id" => "x"
			);
			$data['programa'] = $this->general_model->get_basic_search($arrParam);//programas list
			
			if ($data["idAsignatura"] != 'x') {
				$arrParam = array("idAsignatura" => $data["idAsignatura"]);
				$data['information'] = $this->general_model->get_asignaturas($arrParam);
			}
			
			$this->load->view("asignaturas_modal", $data);
    }
	
	/**
	 * Update asignatura
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function save_asignatura()
	{			
			header('Content-Type: application/json');
			$data = array();

			$idAsignatura = $this->input->post('hddId');
			
			$msj = "Se adicionó una nueva Asignatura";
			if ($idAsignatura != '') {
				$msj = "Se editó una Asignatura";
			}

			if ($idAsignatura = $this->parametros_model->saveAsignatura()) {
				$data["result"] = true;
				$data["idRecord"] = $idAsignatura;
				
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$data["idRecord"] = "";
				
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);
    }
	
	/**
	 * Lista de temas
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function temas()
	{
			$this->load->model("general_model");
			$arrParam = array();
			$data['info'] = $this->general_model->get_temas($arrParam);
			
			$data["view"] = 'temas';
			$this->load->view("layout", $data);
	}
	
    /**
     * Cargo modal - formulario temas
     * @since 12/3/2019
     */
    public function cargarModalTema() 
	{
			header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos
			
			$data['information'] = FALSE;
			$data["idTema"] = $this->input->post("idTema");	
			
			$arrParam = array();
			$data['asignatura'] = $this->general_model->get_asignaturas($arrParam);//asignaturas list
			
			if ($data["idTema"] != 'x') {
				$arrParam = array("idTema" => $data["idTema"]);
				$data['information'] = $this->general_model->get_temas($arrParam);
			}
			
			$this->load->view("temas_modal", $data);
    }
	
	/**
	 * Update tema
     * @since 12/3/2019
     * @author BMOTTAG
	 */
	public function save_tema()
	{			
			header('Content-Type: application/json');
			$data = array();

			$idTema = $this->input->post('hddId');
			
			$msj = "Se adicionó un nuevo Tema";
			if ($idTema != '') {
				$msj = "Se editó un Tema";
			}

			if ($idTema = $this->parametros_model->saveTema()) {
				$data["result"] = true;
				$data["idRecord"] = $idTema;
				
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$data["idRecord"] = "";
				
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);
    }

	
}