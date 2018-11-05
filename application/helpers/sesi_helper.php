<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    //zona waktu
    date_default_timezone_set('Asia/Jakarta');

    //session
    function isSignin() { 
        if(isset($_SESSION['detailUser'])) {
            return TRUE;
        } else {
            redirect(site_URL().'auth/signin', 'refresh');
        }
    }

    //session SU
    function sessionSU() {
        $ci = & get_instance();
        $session = $ci->session->userdata('id_level');
        if ($session == '0' AND $ci->session->userdata('id_level') != '1') {
            redirect(site_URL());
        }
    }
    
    //session Admin
    function sessionAdmin() {
        $ci = & get_instance();
        $session = $ci->session->userdata('id_level');
        if ($session == '0' AND $ci->session->userdata('id_level') != '2') {
            redirect(site_URL());
        }
    }

    //session Author
    function sessionAuthor() {
        $ci = & get_instance();
        $session = $ci->session->userdata('id_level');
        if ($session == '0' AND $ci->session->userdata('id_level') != '3') {
            redirect(site_URL());
        }
    }
