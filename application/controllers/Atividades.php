<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atividades extends CI_Controller {

	public function index()	{

        //$this->output->enable_profiler(TRUE);
        $this->load->model("atividades_model");
        $atividades = $this->atividades_model->getAll_atividades();
        $dados = array("atividades" => $atividades);        
        $this->load->view("index", $dados);
	}


	public function editar() {
    	$id = $this->input->get("id");
    	$this->load->model("atividades_model");
    	$atividade = $this->atividades_model->buscar($id);
    	$dados = array("atividade" => $atividade);
    	
    	$this->load->view("atividades/editar", $dados);
	}
}
