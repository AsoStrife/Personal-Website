<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends CI_Controller {

	public function twitch(){

		$this->load->view('social/twitch');
	}
}
