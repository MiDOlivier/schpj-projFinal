<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index() {
        
        $html = $this->load->view('screen/Boot', null, true);
        $this->show($html);
    }

}
