<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Clase para consultas generales a una tabla
 */
class General_model extends CI_Model {

    /**
     * Consulta BASICA A UNA TABLA
     * @param $TABLA: nombre de la tabla
     * @param $ORDEN: orden por el que se quiere organizar los datos
     * @param $COLUMNA: nombre de la columna en la tabla para realizar un filtro (NO ES OBLIGATORIO)
     * @param $VALOR: valor de la columna para realizar un filtro (NO ES OBLIGATORIO)
     * @since 8/11/2016
     */
    public function get_basic_search($arrData) {
        if ($arrData["id"] != 'x')
            $this->db->where($arrData["column"], $arrData["id"]);
        $this->db->order_by($arrData["order"], "ASC");
        $query = $this->db->get($arrData["table"]);

        if ($query->num_rows() >= 1) {
            return $query->result_array();
        } else
            return false;
    }
	
    /**
     * Asignaturas
     * Modules: Parametros
     * @since 12/3/2019
     */
    public function get_asignaturas($arrData) 
	{
        $this->db->select();
        $this->db->join('param_programas P', 'P.id_param_programas = A.fk_id_param_programas', 'INNER');
		
        if (array_key_exists("idAsignatura", $arrData)) {
            $this->db->where('A.id_param_asignaturas', $arrData["idAsignatura"]);
        }
		
		$this->db->order_by('P.programa', 'asc');
		$query = $this->db->get('param_asignaturas A');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
	
    /**
     * Temas
     * Modules: Parametros
     * @since 12/3/2019
     */
    public function get_temas($arrData) 
	{
        $this->db->select();
        $this->db->join('param_asignaturas A', 'A.id_param_asignaturas = T.fk_id_param_asignaturas', 'INNER');
		
        if (array_key_exists("idTema", $arrData)) {
            $this->db->where('T.id_param_temas', $arrData["idTema"]);
        }
		
		$this->db->order_by('A.asignaturas', 'asc');
		$query = $this->db->get('param_temas T');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
	




}