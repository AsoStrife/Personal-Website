<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {

	public function index(){
		$data['work_experiences'] 	= $this->db->select('*')->from('work_experiences')->order_by('id', 'desc')->get()->result();

		$this->load->view('works', $data);
	}
}
