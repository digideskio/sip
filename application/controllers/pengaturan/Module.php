<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends CI_Controller {
	
	//construct
	function __construct() {
		parent::__construct();
		isSignin();
    }

	//index
	public function index() {
		// add breadcrumbs
		$this->breadcrumbs->push('Module', '/pengaturan/module');

		// unshift crumb
		$this->breadcrumbs->unshift('Pengaturan', '/');

		//get data
		$w = $this->m_backend->edit('m_web', array('WebID' => 1))->row_array();
		
		if (isset($_POST['mod'])) {
			$data = array(
				'NamaApp'    => $this->db->escape_str($this->input->post('NamaApp')),
			);
			
			$where = array('WebID' => $this->input->post('WebID'));
			$this->m_backend->update('m_web', $data, $where);

			$this->session->set_flashdata('simpan', 'Pengaturan Web berhasil diupdate ...');
			redirect(site_URL().'pengaturan/module', 'refresh');

		} else {
			$data = array(
				'title'  => 'Pengaturan Module',
				'w'      => $w
			);
			$this->templatebe->load('_backend/aceadmin/template', '_backend/aceadmin/pengaturan/module/view', $data);
			$this->load->view('_backend/aceadmin/plugin/jsform');
            $this->load->view('_backend/aceadmin/plugin/jselement');
			$this->load->view('_backend/aceadmin/plugin/jsnestable');
			$this->load->view('_backend/aceadmin/plugin/jstable');
		}
	}

}
