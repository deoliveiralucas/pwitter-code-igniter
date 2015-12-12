<?php

defined('BASEPATH') or exit('No direct script acess allowed');

class Authentication extends CI_Controller
{

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->user->canLogin($username, $password);

        if ($result) {
            $this->session->set_userdata('username', $username);
            redirect('profile/index/'. $username);
        } else {
            redirect('main/index');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main/index');
    }
}
