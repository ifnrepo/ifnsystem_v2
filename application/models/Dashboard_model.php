<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard_model extends CI_model
{
    public function getAllUser()
    {
        $this->db->select('user.*, role.role_name');
        $this->db->from('user');
        $this->db->join('role', 'role.id = user.role_id', 'left');
        return $this->db->get()->result_array();
    }
}
