<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Publications extends CI_Controller {

	public function index(){
		$data['publications'] = $this->db->select('*')->from('publications')->get()->result();

		$this->load->view('publications', $data);
	}
}
