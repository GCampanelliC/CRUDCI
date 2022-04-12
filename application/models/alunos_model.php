<?php

class Alunos_model extends CI_Model{

    public function listar_alunos(){

        return $this->db->get("users")->result_array();

    }

    
    public function show($id)
    {
       
       return $this->db->get_where("users", array(
        "id"=> $id
        ))->row_array();
    }

    public function store($dados){
        $this->db->insert("users", $dados);
         
    }

    public function upd($id, $alunos)
    {
        $this->db->where("id", $id);
        $this->db->update("users", $alunos);

        if($this->db->affected_rows()){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function destroy($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("users");
    }
    
}
?>