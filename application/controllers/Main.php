<?php

class Main extends CI_Controller
{
    public function index($username = 'lucas')
    {
        $this->load->view('template/_header', array('removeTopo' => true));
        $this->load->view('main/index');
        $this->load->view('template/_footer');
    }
}
