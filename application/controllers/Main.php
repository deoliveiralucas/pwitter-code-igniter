<?php

class Main extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('profile/index');
        }

        $this->load->view('template/_header', array('removeTopo' => true));
        $this->load->view('main/index');
        $this->load->view('template/_footer');
    }
}
