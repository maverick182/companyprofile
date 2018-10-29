<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('modelku');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function formulir(){
    $this->load->view('informulir');
    }

  public function informulir(){
    $nama = $this->input->post("nama");
    $email = $this->input->post("email");
    $phone = $this->input->post("phone");
    $pesan = $this->input->post("pesan");
    $parameter = array(
      'nama' => $nama,
      'email'=> $email,
      'notelp'=> $phone,
      'pesan'=> $pesan
    );

    $this->modelku->informulir($parameter);
    /*$this->session->set_flashdata('notisSM',
        '<div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i>User berhasil ditambahkan</h4>
        </div>');*/
     redirect(base_url('home'));

	}
	

	





	public function blog()
	{
		$this->load->view('blog');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function news()
	{
		$data['berita'] = $this->modelku->getData('berita')->result();
		$this->load->view('news', $data);
	}

	public function addnews()
	{
		$this->load->view('addnews');
	}

	public function inbox()
	{
	  $data['formulir'] = $this->modelku->getFormulir()->result();
      $this->load->view('inbox.php', $data);    
	}

	public function hapus_inbox($id){
		$where = array('id' => $id);
		$this->modelku->hapus_data($where,'formulir');
		redirect(base_url('control/inbox'));
	}

	public function reqruitment()
	{
		$this->load->view('reqruitment');
	}

	public function req()
	{
		$this->load->view('req');
	}

	public function testmodal(){
		$this->load->view('vmodal');
	}
	public function data_ajax($id){
    	$data = $this->modelku->getDetailInbox($id);
    	echo json_encode($data);
    	//echo "huhuhuhu";
  	}
	public function check_login()
	{
		if(isset($_POST['Login'])){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$check = $this->modelku->check_login($username,$password);

			if($check > 0){
			$data_session = array(
				'status' => "admin login"
				);
			$this->session->set_userdata($data_session);

			redirect(base_url('dashboard'));
			}

		} else{
			echo "YEUUU";
		}
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function show_modal()
	{
		$id = $this->input->post('rowid');
		$detail = $this->modelku->getDetailInbox($id)->result();
		foreach ($detail as $rows) {
			echo "<tr>";
			echo "<td>".$rows->nama."</td>";
			echo "<td>".$rows->email."</td>";
		}		
	}

	public function innews()
	{
		$tanggal_posting = $this->input->post('tanggal_posting');
		$judul = $this->input->post('judul');
		$content = $this->input->post('content');
		$img = $this->input->post('img');
		$data = array(
			'judul_berita' => $judul,
			'tanggal_berita' => $tanggal_posting,
			'isi_berita' => $content,
			'img' => $img
		);
		$this->modelku->input_data('berita', $data);
		redirect(base_url('control/news'));
		$message = "Input berita berhasil";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

	public function hapus_berita($id)
	{
		$where = array('id_berita' => $id);
		$this->modelku->hapus_data($where,'berita');
		redirect(base_url('control/news'));
	}
}