<?php 

class Modelku extends CI_Model{

	 public function __construct(){
       $this->load->database();
     }

	function check_login($username,$password){		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('akun')->row();
	}


	public function informulir($data){
        $this->db->insert('formulir', $data);
     }

     public function getFormulir(){
		return $this->db->get('formulir');
	}


	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function getDetailInbox($where){
		//$this->db->where($where);
		$query = $this->db->get_where('formulir', array('id'=>$where));
		return $query->row();
	}
	function input_data($table,$data){
		$this->db->insert($table,$data);
	}
	function getData($table){
		return $this->db->get($table);
	}
 }