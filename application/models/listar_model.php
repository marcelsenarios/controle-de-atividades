<?php

class Listar_model extends CI_Model {

    public function getAll_atividades() {
        return $this->db->get("atividade")->result_array();
    }

}