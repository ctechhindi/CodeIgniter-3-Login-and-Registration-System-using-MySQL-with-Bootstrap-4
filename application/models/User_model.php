<?php 

class User_model extends CI_Model {

    protected $User_table_name = "users";

    /**
     * Insert User Data in Database
     * @param: {array} userData
     */
    public function insert_user($userData) {
        return $this->db->insert($this->User_table_name, $userData);
    }
}
