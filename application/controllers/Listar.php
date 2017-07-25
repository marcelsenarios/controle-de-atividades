<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar extends CI_Controller {

	public function index()	{

        //$this->output->enable_profiler(TRUE);
        $this->load->model("listar_model");

        $listar = $this->listar_model->getAll_atividades();

        $dados = array("listar" => $listar);
        
        $this->load->view("listar/index", $dados);

		$this->load->view('index');
	}
}
