<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['education'] 			= $this->db->select('*')->from('education')->get()->result();
		$data['skills'] 			= $this->db->select('*')->from('skills')->get()->result();

		$this->load->view('home', $data);
	}
}
