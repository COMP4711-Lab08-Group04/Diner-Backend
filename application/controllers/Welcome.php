<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
		$this->data['pagetitle'] = 'Diner Backend Group 4';		
		$this->data['content'] = "You don't have permission to view this page.";
		$this->render();
	}

}
