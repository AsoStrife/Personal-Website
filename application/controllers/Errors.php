<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function error_404(){

		$this->load->view('errors/404');
	}
}
