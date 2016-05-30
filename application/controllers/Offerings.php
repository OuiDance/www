<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offerings extends MY_Controller {
	public function index()
	{
		$offerings = file_get_contents($this->config->item('api_url') . 'services');

		$this->data['offerings'] = json_decode($offerings, true);
		$this->display_page('offerings');
	}

	public function view($id){
		$this->data['php_to_js']['offering_id'] = $id;
		$this->data['scripts'][] = 'js/offerings.js';

		$this->display_page('offering_item');
	}
}
