<?php

class Atividades_model extends CI_Model {

    public function getAll_atividades() {
        return $this->db->get("atividade")->result_array();
    }

    public function buscar($id) {
        return $this->db->get_where("atividades", array(
        	"id" => $id
        ))->row_array();
    }

}