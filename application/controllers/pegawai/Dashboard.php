<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	//construct
	function __construct() {
		parent::__construct();
		isSignin();
    }

	//index
	public function index() {
		// add breadcrumbs
		$this->breadcrumbs->unshift('Dashboard', '/');
		$data = array(
			'title'  => 'Dashboard',
			'p'      => $this->m_backend->data('t_pengumuman', 'LevelID IN('.isset($this->session->userdata('detailUser')[0]->LevelID).')')
		);
		$this->templatebe->load('_backend/aceadmin/template', '_backend/aceadmin/dashboard/view', $data);
		$this->load->view('_backend/aceadmin/plugin/jschart');
	}
	
}
