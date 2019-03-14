<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("dashboard_model");
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{	
			$this->load->model("general_model");
			$userRol = $this->session->userdata("rol");
			
			$data["view"] = "dashboard";
			$this->load->view("layout", $data);
	}
	
	/**
	 * hauling list
     * @since 31/1/2018
     * @author BMOTTAG
	 */
	public function hauling()
	{		
			$this->load->model("general_model");
			$userRol = $this->session->userdata("rol");

			if(!$userRol){ //If it is a normal user, just show the records of the user session
				$arrParam["idEmployee"] = $this->session->userdata("id");
			}
			$arrParam["limit"] = 30;//Limite de registros para la consulta

			$data['infoHauling'] = $this->general_model->get_hauling($arrParam);//info de hauling

			$data["view"] ='hauling_list';
			$this->load->view("layout", $data);
	}
	
	/**
	 * pickup inpection list
     * @since 31/1/2018
     * @author BMOTTAG
	 */
	public function pickups_inspection()
	{		
			$this->load->model("general_model");
			$userRol = $this->session->userdata("rol");

			if(!$userRol){ //If it is a normal user, just show the records of the user session
				$arrParam["idEmployee"] = $this->session->userdata("id");
			}
			$arrParam["limit"] = 30;//Limite de registros para la consulta

			$data['infoDaily'] = $this->general_model->get_daily_inspection($arrParam);//info pickups inspection

			$data["view"] ='pickups_inspection_list';
			$this->load->view("layout", $data);
	}
	
	/**
	 * construction equipment inpection list
     * @since 31/1/2018
     * @author BMOTTAG
	 */
	public function construction_equipment_inspection()
	{		
			$this->load->model("general_model");
			$userRol = $this->session->userdata("rol");

			if(!$userRol){ //If it is a normal user, just show the records of the user session
				$arrParam["idEmployee"] = $this->session->userdata("id");
			}
			$arrParam["limit"] = 30;//Limite de registros para la consulta

			$data['infoHeavy'] = $this->general_model->get_heavy_inspection($arrParam);//info de contruction

			$data["view"] ='construction_equipment_inspection_list';
			$this->load->view("layout", $data);
	}
	
	
}