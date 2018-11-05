<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    //zona waktu
    date_default_timezone_set('Asia/Jakarta');
        
    function helper_log($tipe = "", $str = "") {
        $CI =& get_instance();
        if (strtolower($tipe) == "signin") {
            $log_tipe = "signin";
        
        } elseif(strtolower($tipe) == "signout") {
            $log_tipe = "signout";
        
        } elseif(strtolower($tipe) == "add") {
            $log_tipe = "add";
        
        } elseif(strtolower($tipe) == "edit") {
            $log_tipe = "edit";
        
        } else {
            $log_tipe = "lainnya";
        }
    
        $param = array(
            'LogUser'        => $CI->session->userdata('detailUser')[0]->Login,
            'LogTipe'        => $log_tipe,
            'LogDesc'        => $str,
            'LogDate'        => date('Y-m-d'),
            'LogTime'        => date('H:i:s'),
            'LogIPAddress'   => $_SERVER['REMOTE_ADDR'],
            'LogPlatform'    => $CI->agent->platform(),
            'LogBrowser'     => $CI->agent->browser() . ' ' . $CI->agent->version()
        );
        $CI->m_backend->save_log($param);
    }
