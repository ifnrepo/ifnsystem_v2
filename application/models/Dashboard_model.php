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

    public function cariDataUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->select('user.*, role.role_name');
        $this->db->from('user');
        $this->db->join('role', 'role.id = user.role_id', 'left');
        $this->db->like('user.name', $keyword);
        $this->db->or_like('user.username', $keyword);
        $this->db->or_like('role.role_name', $keyword);
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
        $data = [
            'id' => $this->input->post('id', true),
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "role_id" => $this->input->post('role_id', true),
            "password" => $this->input->post('password', true),
            "sales" => $sales,
            "purchase" => $purchase,
            "inventory" => $inventory,
        ];
        if($this->input->post('id')==$this->session->userdata('id')){
            $this->session->set_userdata('haksales',$sales);
            $this->session->set_userdata('hakpurchase',$purchase);
            $this->session->set_userdata('hakinv',$inventory);
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
