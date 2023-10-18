<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
    public function form()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/form', $data);
        $this->load->view('templates/footer');
    }
    public function icon()
    {
        $data['title'] = 'icon';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('dashboard/icon', $data);
    }
    public function modal()
    {
        $data['title'] = 'modal';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('dashboard/modal', $data);
    }

    public function tabel()
    {
        $data['title'] = 'tabel';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('dashboard/tabel', $data);
    }

    public function profile()
    {
        $data['title'] = 'my profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/profile', $data);
        $this->load->view('templates/footer');
    }

    public function regis()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('Dashboard_model');
        $data['alluser'] = $this->Dashboard_model->getAllUser();
        $data['role'] = $this->db->get('role')->result_array();
        // $data['page'] = $page;
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password harus sama !',
            'min_lenght' => 'password kurang dari 3 karakter !'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required|trim');
        $this->form_validation->set_rules('sales', 'Sales');
        $this->form_validation->set_rules('purchase', 'Purchase');
        $this->form_validation->set_rules('iventory', 'Iventory');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Creat User';
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/registrasi');
            $this->load->view('templates/footer');
        } else {
            // $sales = str_replace('1', '0', $sales_value);
            $sales = isset($_POST['sales']) ? '1000000000000' : '0000000000000';
            $purchase = isset($_POST['purchase']) ? '1000000000000' : '0000000000000';
            $iventory = isset($_POST['iventory']) ? '1000000000000' : '0000000000000';
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'sales' => $sales,
                'purchase' => $purchase,
                'iventory' => $iventory
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('registrasi', '<div class="alert alert-success" role="alert">User pengguna berhasil di tambahkan !</div>');
            redirect('dashboard/regis');
        }
    }

    public function show_users($page = 1)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'users';
        $this->load->model('Dashboard_model');
        $allUsers = $this->Dashboard_model->getAllUser();
        $entries_per_page = 8;
        $offset = ($page - 1) * $entries_per_page;


        $data['alluser'] = array_slice($allUsers, $offset, $entries_per_page);
        // $data['page'] = $page;

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/registrasi', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('hapus_user', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus !</div>');
        redirect('dashboard/regis');
    }
}
