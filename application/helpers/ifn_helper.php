<?php

function is_logged_in()
{

    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    }
}

function check_access($role_id, $item_id)
{
    $ci = get_instance();
    // cari di data base role berdasarkan id
    $ci->db->where('role_id', $role_id);
    // cari di data base item berdasarkan id
    $ci->db->where('item_id', $item_id);
    // cek kecocokan berdasarkan id role dan id item di db role item
    $result = $ci->db->get('role_item');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
