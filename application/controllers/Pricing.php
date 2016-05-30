<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends MY_Controller {
	public function index()
	{
		$this->data['scripts'][] = 'js/pricing.js';
		$this->display_page('pricing');
	}
}
