<?php

class Main extends CI_Controller
{   
    public function index($username = 'lucas')
    {
        $data['paragrafo'] = 'Main';
        
        $data['user'] = $this->user->findByUsername($username);
        $data['followers'] = $this->follows->findFollowersByUserId($data['user']->id);
        $data['following'] = $this->follows->findFollowingByUserId($data['user']->id);
        $data['timeline'] = $this->pweet->findContentByUsers($data['following']);
        
        $this->load->view('template/_header');
        $this->load->view('main/index', $data);
        $this->load->view('template/_footer');
    }
}