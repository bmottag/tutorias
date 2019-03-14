<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Parametros_model extends CI_Model {

	    		
		/**
		 * Add/Edit LUGARES
		 * @since 12/3/2019
		 */
		public function saveLugar() 
		{
				$idLugar = $this->input->post('hddId');
				
				$data = array(
					'sede' => $this->input->post('sede'),
					'direccion' => $this->input->post('direccion')
				);
				
				//revisar si es para adicionar o editar
				if ($idLugar == '') {
					$query = $this->db->insert('param_lugares', $data);
					$idLugar = $this->db->insert_id();				
				} else {
					$this->db->where('id_param_lugares', $idLugar);
					$query = $this->db->update('param_lugares', $data);
				}
				if ($query) {
					return $idLugar;
				} else {
					return false;
				}
		}
		
		/**
		 * Add/Edit PROGRAMAS
		 * @since 12/3/2019
		 */
		public function savePrograma() 
		{
				$idPrograma = $this->input->post('hddId');
				
				$data = array(
					'escuela' => $this->input->post('escuela'),
					'programa' => $this->input->post('programa')
				);
				
				//revisar si es para adicionar o editar
				if ($idPrograma == '') {
					$query = $this->db->insert('param_programas', $data);
					$idPrograma = $this->db->insert_id();				
				} else {
					$this->db->where('id_param_programas', $idPrograma);
					$query = $this->db->update('param_programas', $data);
				}
				if ($query) {
					return $idPrograma;
				} else {
					return false;
				}
		}
		
		/**
		 * Add/Edit ASIGNATURAS
		 * @since 12/3/2019
		 */
		public function saveAsignatura() 
		{
				$idAsignatura = $this->input->post('hddId');
				
				$data = array(
					'fk_id_param_programas' => $this->input->post('programa'),
					'asignaturas' => $this->input->post('asignatura')
				);
				
				//revisar si es para adicionar o editar
				if ($idAsignatura == '') {
					$query = $this->db->insert('param_asignaturas', $data);
					$idAsignatura = $this->db->insert_id();				
				} else {
					$this->db->where('id_param_asignaturas', $idAsignatura);
					$query = $this->db->update('param_asignaturas', $data);
				}
				if ($query) {
					return $idAsignatura;
				} else {
					return false;
				}
		}

		/**
		 * Add/Edit TEMAS
		 * @since 12/3/2019
		 */
		public function saveTema() 
		{
				$idTema = $this->input->post('hddId');
				
				$data = array(
					'fk_id_param_asignaturas' => $this->input->post('asignatura'),
					'temas' => $this->input->post('tema')
				);
				
				//revisar si es para adicionar o editar
				if ($idTema == '') {
					$query = $this->db->insert('param_temas', $data);
					$idTema = $this->db->insert_id();				
				} else {
					$this->db->where('id_param_temas', $idTema);
					$query = $this->db->update('param_temas', $data);
				}
				if ($query) {
					return $idTema;
				} else {
					return false;
				}
		}		


	
		
	    
	}