<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends MY_Controller {

	public function index() {
		$this->load->model('gameModel', 'model');
        $v['v'] = $this->model->turn();
        
        $html = $this->load->view('form/combatForm', $v, true);
        $this->show($html);
    }

    public function gameEnd() {
        $html = $this->load->view('screen/gameOver', null, true);
        $this->show($html);
    }

}
