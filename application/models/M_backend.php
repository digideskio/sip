<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_backend extends CI_model {

    //view
    public function view($table) {
        return $this->db->get($table);
    }

###################################################################################################

    //menampilkan data dari sebuah tabel dengan pagination.
    public function getList($tables, $limit=10, $page=1, $by='', $sort='ASC') {
        if(!empty($by)) $this->db->order_by($by,$sort);

        $this->db->limit($limit,$page);
        return $this->db->get($tables);
    }

    //menampilkan semua data dari sebuah tabel.
    public function getAll($tables) {
        return $this->db->get($tables);
    }

    //menampilkan data
    public function data($tables, $where='', $limit=1, $page=0, $by='', $sort='ASC') {
        if (!empty($where)) $this->db->where($where);

    	$this->db->where('KodeID', $this->session->userdata('detailUser')[0]->KodeID);    	
    	$this->db->limit($limit,$page);
    	$this->db->order_by($by,$sort);
        return $this->db->get($tables)->row_array();
    }

    //menampilkan dataNA
    public function dataNA($tables, $where='', $limit=1, $page=0, $by='', $sort='ASC') {
        if (!empty($where)) $this->db->where($where);

        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        $this->db->where('NA','N');
        $this->db->limit($limit,$page);
        $this->db->order_by($by,$sort);
        return $this->db->get($tables)->row_array();
    }

    //menghitung jumlah record dari sebuah tabel.
    public function countAll($tables, $where='', $limit='10') {
        $this->db->where($where);
        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        $this->db->limit($limit);
        return $this->db->get($tables)->num_rows();
    }

    //menghitung jumlah record dari sebuah query.
    public function countQuery($query) {
        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        return $this->db->get($query)->num_rows();
    }

    //menampilkan satu record brdasarkan parameter.
    public function condition($tables, $where) {
        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        $this->db->where($where);
        return $this->db->get($tables);
    }

    //menampilkan satu record brdasarkan parameter.
    public function getByID($tables, $pk, $id) {
        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        $this->db->where($pk,$id);
        return $this->db->get($tables)->row_array();
    }

    //menampilkan data dari sebuah query dengan pagination.
    public function queryList($query, $limit, $page) {
        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        return $this->db->query($query." limit ".$page.",".$limit."");
    }

    //menampilkan data dari sebuah query
    public function queryBiasa($query, $by, $sort){
        $this->db->where('KodeID', $this->session->userdata('detailUser')[0]->Login);
        $this->db->order_by($by,$sort);
        return $this->db->query($query);
    }

###################################################################################################

    //insert
    public function insert($table, $data) {
        return $this->db->insert($table, $data);
    }

    //edit
    public function edit($table, $data) {
        return $this->db->get_where($table, $data);
    }
 
    //update
    public function update($table, $data, $where) {
        $this->db->update($table, $data, $where); 
    }

    //delete
    public function delete($table, $where) {
        return $this->db->delete($table, $where);
    }

###################################################################################################

    //view_where
    public function view_where($table, $data) {
        $this->db->where($data);
        return $this->db->get($table);
    }

    //view_ordering_limit
    public function view_ordering_limit($table, $order, $ordering, $baris, $dari) {
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }
    
    //view_ordering
    public function view_ordering($table, $order, $ordering) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    //view_where_ordering
    public function view_where_ordering($table, $data, $order, $ordering) {
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    //view_join_one
    public function view_join_one($table1, $table2, $field, $order, $ordering) {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    //view_join_where
    public function view_join_where($table1, $table2, $field, $where, $order, $ordering) {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

###################################################################################################

    //auth_user
    public function auth_user($tables, $username, $password) {
		$this->db->where('Login', $username);
        $this->db->where("Password = LEFT(PASSWORD('".$password."'),10)");
        return $this->db->get($tables)->result();
        
        $data = array(
            'TglLastIn' => date('Y-m-d'),
            'JamLastIn' => date('H:i:s'),
            'IPAddress' => $_SERVER['REMOTE_ADDR'],
            'Platform'  => $this->agent->platform(),
            'Browser'   => $this->agent->browser() . ' ' . $this->agent->version()
        );
        $this->db->update('t_pegawai', $data);
      }

###################################################################################################
      
    //simpan log (history data)
    public function save_log($param) {
        $sql  = $this->db->insert_string('t_log', $param);
        $ex   = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }

###################################################################################################

    //grafik_kunjungan
    function grafik_kunjungan() {
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }

}
