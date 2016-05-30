<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MY_Controller {
	public function index()
	{
		$this->data['scripts'][] = 'js/schedule.js';
		$this->display_page('schedule');
	}
}
