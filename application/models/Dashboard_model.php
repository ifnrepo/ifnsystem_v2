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

    public function getIdUser($id)
    {
        $this->db->select('user.*, role.role_name');
        $this->db->from('user');
        $this->db->join('role', 'role.id = user.role_id', 'left');
        $this->db->where('user.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function editUser()
    {
        $sales = isset($_POST['sales']) ? '1000000000000' : '0000000000000';
        $purchase = isset($_POST['purchase']) ? '1000000000000' : '0000000000000';
        $inventory = isset($_POST['inventory']) ? '1000000000000' : '0000000000000';

        // Jika tidak ada checkbox yang dipilih, pastikan nilainya '0000000000000'
        if (!isset($_POST['sales'])) {
            $sales = '0000000000000';
        }
        if (!isset($_POST['purchase'])) {
            $purchase = '0000000000000';
        }
        if (!isset($_POST['inventory'])) {
            $inventory = '0000000000000';
        }

        $data = [
            'id' => $this->input->post('id', true),
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "role_id" => $this->input->post('role_id', true),
            "sales" => $sales,
            "purchase" => $purchase,
            "inventory" => $inventory,
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
