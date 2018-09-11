<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {

	public function index(){
		$data['education'] 			= $this->db->select('*')->from('education')->get()->result();

		$this->load->view('education', $data);
	}
}
