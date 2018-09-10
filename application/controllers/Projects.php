<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index(){
		$data['projects'] = $this->db->select('*')->from('projects')->get()->result();

		$this->load->view('projects', $data);
	}
}
