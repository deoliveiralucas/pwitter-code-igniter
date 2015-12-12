<?php

class Profile extends CI_Controller
{
    public function view($username)
    {
        $this->load->database();
        $this->load->model('user');
        
        $data['user'] = $this->user->findByUsername($username);
        
        $this->load->view('template/_header');
        $this->load->view('profile/view', $data);
        $this->load->view('template/_footer');
    }
    
    public function index()
    {
        $data['paragrafo'] = 'Paragrafo da view profile';
        
        $this->load->view('template/_header');
        $this->load->view('profile/index', $data);
        $this->load->view('template/_footer');
    }
}