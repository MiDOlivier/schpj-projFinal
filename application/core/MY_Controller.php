<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function show($conteudo) {
        $html  = $this->load->view('common/cabecalho', null, true);
        $html .= $conteudo;
        $html .= $this->load->view('common/rodape', null, true);
        echo $html;
    }    

}