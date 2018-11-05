<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signout extends CI_Controller {
	//index
	public function index() {
		$u = $this->session->userdata('detailUser');

		if(isset($u)) {
			$username = $this->session->userdata('detailUser')[0]->Login;
			helper_log("signout", "$username telah Sign Out");
			$this->session->unset_userdata('detailUser');
			$this->session->set_flashdata('simpan', 'Kamu berhasil keluar !');
			redirect(site_URL().'auth/signin', 'refresh');
		} else {
			$this->session->set_flashdata('salah', 'Kamu belum masuk !');
			redirect(site_URL().'auth/signin', 'refresh');
		}
	}
	
}
