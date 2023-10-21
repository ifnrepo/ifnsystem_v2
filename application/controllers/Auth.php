<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $data['user'] = $this->db->get('user')->result_array();
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Pengguna';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {

            if (password_verify($password, $user['password'])) {
                $user_data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'haksales' => $user['sales'],
                    'hakpuchase' => $user['purchase'],
                    'hakinv' => $user['inventory']
                ];

                $this->session->set_userdata($user_data);
                redirect('dashboard');
                // if ($user['role_id'] == 1) {
                //     redirect('dashboard');
                // } elseif ($user['role_id'] == 2) {
                //     redirect('purchase');
                // } else {
                //     redirect('iventory');
                // }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang Anda masukkan salah!</div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pengguna Tidak di temukan.</div>');

            redirect('auth');
        }
    }




    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">anda berhasil Logout dari aplikasi !</div>');
        redirect('auth');
    }
}
