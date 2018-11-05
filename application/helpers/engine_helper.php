<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    //zona waktu
    date_default_timezone_set('Asia/Jakarta');

    //frontend
    function template_frontend() {
        $ci = & get_instance();
        $query = $ci->db->query("SELECT folder FROM tbl_templates_frontend where aktif = 'Y'");
        $tmp = $query->row_array();
        if ($query->num_rows() >=1) {
            return $tmp['folder'];
        } else {
            return 'errors';
        }
    }

    //backend
    function template_backend() {
        $ci = & get_instance();
        $query = $ci->db->query("SELECT folder FROM tbl_templates_backend where aktif = 'Y'");
        $tmp = $query->row_array();
        if ($query->num_rows() >= 1) {
            return $tmp['folder'];
        } else {
            return 'errors';
        }
    }

    //title
    function title() {
        $ci = & get_instance();
        $title = $ci->db->query("SELECT NamaApp FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $title['NamaApp'];
    }

    //singkatan
    function singkatan() {
        $ci = & get_instance();
        $title = $ci->db->query("SELECT Singkatan FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $title['Singkatan'];
    }

    //deskripsi
    function deskripsi() {
        $ci = & get_instance();
        $title = $ci->db->query("SELECT Deskripsi FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $title['Deskripsi'];
    }

    //favicon
    function favicon() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Favicon FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Favicon'];
    }

    //favicon
    function icon() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Icon FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Icon'];
    }

    //logo
    function logo() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Logo FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Logo'];
    }

    //telp
    function telp() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Telp FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Telp'];
    }

    //email
    function email() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Email FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Email'];
    }

    //alamat
    function alamat() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Alamat FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Alamat'];
    }

    //websiteurl
    function websiteurl() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT WebsiteURL FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['WebsiteURL'];
    }

    //facebook
    function facebook() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Facebook FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Facebook'];
    }

    //facebookfp
    function facebookfp() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT FacebookFP FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['FacebookFP'];
    }

    //twitter
    function twitter() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Twitter FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Twitter'];
    }

    //instagram
    function instagram() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Instagram FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Instagram'];
    }

    //youtube
    function youtube() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT YouTube FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['YouTube'];
    }

    //maps
    function maps() {
        $ci = & get_instance();
        $fav = $ci->db->query("SELECT Maps FROM m_web ORDER BY WebID DESC LIMIT 1")->row_array();
        return $fav['Maps'];
    }
