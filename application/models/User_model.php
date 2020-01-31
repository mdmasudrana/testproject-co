<?php
class User_model extends CI_model {
    function create($formArray)
    {
        $this->db->insert('miu',$formArray); //INSERT INTO newproject (name id email phone address) values (?, ?, ?, ?, ? )
    }

    function all() {
        return $miu = $this->db->get('miu')->result_array();
    }
    function getUser($userId) {
        $this->db->where('id',$userId);
        return $user = $this->db->get('miu')->row_array();
    }
    function updateUser($userId,$formArray){
        $this->db->where('id',$userId);
        $this->db->update('miu',$formArray);

    }
    function deleteUser($userId) {
        $this->db->where('id');
        $this->db->delete('miu',$userId);
        
    }
    
}

?>