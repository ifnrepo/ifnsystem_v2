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

        $this->load->view('dashboard/form', $data);
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
        if ($this->input->post('keyword')) {
            $data['alluser'] = $this->Dashboard_model->cariDataUser();
        }
        $data['role'] = $this->db->get('role')->result_array();

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
            $inventory = isset($_POST['inventory']) ? '1000000000000' : '0000000000000';
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'sales' => $sales,
                'purchase' => $purchase,
                'inventory' => $inventory
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

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit User';
        $this->load->model('Dashboard_model');
        $data['iduser'] = $this->Dashboard_model->getIdUser($id);
        $data['role'] = $this->db->get('role')->result_array();
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('sales', 'Sales',);
        $this->form_validation->set_rules('inventory', 'Inventory',);
        $this->form_validation->set_rules('purchase', 'Purchase');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->editUser();
            $this->session->set_flashdata('user', '<div class="alert alert-success" role="alert">User berhasil di update !</div>');
            redirect('dashboard/regis');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('user', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus !</div>');
        redirect('dashboard/regis');
    }
    public function change_password($id)
    {
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $data['title'] = 'Change password';
        $data['iduser'] = $this->Dashboard_model->getIdUser($id);

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/change', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            // Fetch the user data based on the provided ID
            $user = $this->db->get_where('user', ['id' => $id])->row_array();

            // Jika password yang dimasukkan salah
            if (!password_verify($current_password, $user['password'])) {
                $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Mohon maaf, password yang Anda masukkan salah!</div>');
                redirect('dashboard/change_password/' . $id);
            } else {
                // Jika password baru sama dengan password lama
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
                    redirect('dashboard/change_password/' . $id);
                } else {
                    // Jika password sudah benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('id', $id);
                    $this->db->update('user');

                    $this->session->set_flashdata('password', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('dashboard/regis');
                }
            }
        }
    }
}
