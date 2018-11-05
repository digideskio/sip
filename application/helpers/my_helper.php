<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    //zona waktu
    date_default_timezone_set('Asia/Jakarta');

    //level
    function getLevel($id_level) {
	    $CI =& get_instance();
    	$ambil = $CI->db->query("SELECT nama_level FROM tbl_level WHERE id_level = '$id_level'")->row();
	    return $ambil->nama_level;
    }

