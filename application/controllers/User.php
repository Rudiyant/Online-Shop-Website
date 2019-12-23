<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
    }

    public function create()
    {
        $user = array(
            'nama'      => $this->input->post('nama'),
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password'),
        );

        if ($this->UserModel->create($user)) {
            $this->session->set_flashdata('success', '<div style="color:green">Registration success!</div>');
            redirect('user');
        }
    }

    public function authenticate()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $user = $this->UserModel->findByUsername($username);
        $is_valid = $this->UserModel->authenticate($username, $password);

        if ($is_valid) {
            $data = array(
                'username'  => $user['username'],
                'id_user'   => $user['id_user'],
                'nama'      => $user['nama'],
                'alamat'      => $user['alamat'],
                'no_hp'      => $user['no_hp'],
                'password'      => $user['password'],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($data);

            redirect('content');
        } else {
            if (!$user) {
                $this->session->set_flashdata('failed', '<div style="color: red">Username not found!</div>');
            } else if (!$is_valid) {
                $this->session->set_flashdata('failed', '<div style="color: red">Wrong password!</div>');
            }
            redirect('user');
        }
    }

    public function logout()
    {
        $userdata = array('username', 'nama', 'id_user', 'alamat', 'password', 'no_hp');
        $this->session->set_userdata('logged_in', 0);

        $this->session->unset_userdata($userdata);
        redirect('user');
    }

    public function tampil_data_profil($id_user)
    {
        $data['user'] = $this->UserModel->findById($id_user);

        $this->load->view('users/edit_profil', $data);
    }

    public function update($id_user)
    {
        $nama     = $this->input->post('nama');
        $alamat   = $this->input->post('alamat');
        $no_hp    = $this->input->post('no_hp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_user = array(
            'id_user' => $id_user,
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );
        $this->UserModel->update($data_user);
        $this->session->set_userdata($data_user);
        $this->session->set_flashdata('editBerhasil', '<div style="color:green">Data Berhasil Diubah!</div>');
        redirect('user/profil');
    }

    public function delete($id_user){
        $this->UserModel->delete($id_user);
        $userdata = array('username', 'nama', 'id_user', 'alamat', 'password', 'no_hp');
        $this->session->set_userdata('logged_in', 0);

        $this->session->unset_userdata($userdata);

        $this->load->view('users/login');
    }

    public function registrasi()
    {
        $this->load->view('users/register');
    }

    public function profil()
    {
        $this->load->view('users/profil');
    }

    public function index()
    {
        $this->load->view('users/login');
    }
}
