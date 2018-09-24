<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class AndreaCorriga {

	private $ci;

	private $main;
	private $img;
	private $social;
	private $facebook_open_graph;

	public function __construct(){
		$this->ci =& get_instance();
		$this->ci->config->load('andreacorriga');

		$this->variables = array(
					'main' 	=> $this->ci->config->item('main'),
					'img' 	=>$this->ci->config->item('img'),
					'social' => $this->ci->config->item('social'),
					'facebook_open_graph' => $this->ci->config->item('facebook_open_graph')
				);
	}

	/**
	 * Check if the element exist in the config array
	 * If check return true then return the variable
	 */
	public function get($variable, $offset){

		if(array_key_exists($variable, $this->variables) && array_key_exists($offset, $this->variables[$variable]))
			return $this->variables[$variable][$offset];
		else
			return null;
	}

	/**
	 *
	 **/
	public function get_title(){

		if($this->ci->uri->segment(1) == false){
			return $this->get('main', 'main_title');
		}
		else{
			if($this->ci->uri->segment(1) == "social" && $this->ci->uri->segment(2) == "twitch")
				return "Live Twitch" . $this->get('main', 'second_title');
			elseif($this->ci->uri->segment(1) == "works")
				return "Work Experiences" . $this->get('main', 'second_title');
			else
				return ucfirst($this->ci->uri->segment(1)) . $this->get('main', 'second_title');
		}
	}
}