<?php
class SetorPBBModel extends CI_Model{
    public function fetchData($limit, $start, $id){
        $query = $this->db->query("SELECT * FROM data_setor a
        where id_admin = ". $id ."
        ORDER BY a.id DESC
        LIMIT " . $start . ", " . $limit);

        return $query;
    }
}