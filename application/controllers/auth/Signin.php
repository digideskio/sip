<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {
	
	//construct
	function __construct() {
		parent::__construct();
    }

	//index
	public function index() {
		if ($this->session->userdata('detailUser')) {
			redirect(site_URL().'pegawai/dashboard', 'refresh');
		
		} else if ($this->session->userdata('detailUser')) {
			redirect(site_URL().'mahasiswa/dashboard', 'refresh');
		
		} else {
			if (isset($_POST['submit'])) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$loginPegawai = $this->m_backend->auth_user('t_pegawai', $username, $password);
				$loginMahasiswa = $this->m_backend->auth_user('t_mahasiswa', $username, $password);
					
				if (!empty($loginPegawai)) {
					$this->session->sess_expiration = '14400';// expires in 4 hours
					$this->session->set_userdata('detailUser', $loginPegawai);
					helper_log("signin", "$username telah Sign In");
					$this->session->set_flashdata('simpan', 'Kamu berhasil masuk ...');
					redirect(site_URL().'pegawai/dashboard', 'refresh');

				} else if (!empty($loginMahasiswa)) {
					$this->session->sess_expiration = '14400';// expires in 4 hours
					$this->session->set_userdata('detailUser', $loginMahasiswa);
					helper_log("signin", "$username telah Sign In");
					$this->session->set_flashdata('simpan', 'Kamu berhasil masuk ...');
					redirect(site_URL().'mahasiswa/dashboard', 'refresh');
					
				} else {
					$this->session->set_flashdata('gagal', 'username dan password kamu salah !');
					redirect(site_URL().'auth/signin', 'refresh');
				}
				
			} else {
				$data = array(
					'title' => 'Sign In',
					);
				$this->load->view('_backend/aceadmin/auth/view', $data);
			}
		}
	}
	
}
