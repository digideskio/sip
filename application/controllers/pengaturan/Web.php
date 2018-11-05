<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	//construct
	function __construct() {
		parent::__construct();
		isSignin();
    }

	//index
	public function index() {
		// add breadcrumbs
		$this->breadcrumbs->push('Web', '/pengaturan/web');

		// unshift crumb
		$this->breadcrumbs->unshift('Pengaturan', '/');

		//get data
		$w = $this->m_backend->edit('m_web', array('WebID' => 1))->row_array();
		
		if (isset($_POST['das'])) {
			$data = array(
				'NamaApp'    => $this->db->escape_str($this->input->post('NamaApp')),
				'Singkatan'  => $this->db->escape_str($this->input->post('Singkatan')),
				'Deskripsi'  => $this->db->escape_str($this->input->post('Deskripsi')),
				'Telp'       => $this->db->escape_str($this->input->post('Telp')),
				'Email'      => $this->db->escape_str($this->input->post('Email')),
				'Alamat'     => $this->db->escape_str($this->input->post('Alamat')),
				'WebsiteURL' => $this->db->escape_str($this->input->post('WebsiteURL')),
				'YouTube'    => $this->db->escape_str($this->input->post('YouTube')),
				'Facebook'   => $this->db->escape_str($this->input->post('Facebook')),
				'FacebookFP' => $this->db->escape_str($this->input->post('FacebookFP')),
				'Twitter'    => $this->db->escape_str($this->input->post('Twitter')),
				'Instagram'  => $this->db->escape_str($this->input->post('Instagram')),
				'Maps'       => $this->db->escape_str($this->input->post('Maps'))
			);
			
			$where = array('WebID' => $this->input->post('WebID'));
			$this->m_backend->update('m_web', $data, $where);

			$this->session->set_flashdata('simpan', 'Pengaturan Web berhasil diupdate ...');
			redirect(site_URL().'pengaturan/web', 'refresh');

		} else if(isset($_POST['fav'])) {
		
		} else if(isset($_POST['log'])) {
		
		} else if(isset($_POST['ico'])) {

		} else {
			$data = array(
				'title'  => 'Pengaturan Web',
				'w'      => $w
			);
			$this->templatebe->load('_backend/aceadmin/template', '_backend/aceadmin/pengaturan/web/view', $data);
			$this->load->view('_backend/aceadmin/plugin/jsform');
			$this->load->view('_backend/aceadmin/plugin/jselement');
		}
	}

}
