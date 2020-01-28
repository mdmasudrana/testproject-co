<?php
class User_model extends CI_model {
    function create($formArray)
    {
        $this->db->insert('miu',$formArray); //INSERT INTO newproject (name id email phone address) values (?, ?, ?, ?, ? )
    }
}

?>