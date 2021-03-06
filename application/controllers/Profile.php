<?php

class Profile extends CI_Controller
{
    public function view($username = null)
    {
        if (! $this->session->userdata('username')) {
            redirect('main/index');
        }
        if (! $username) {
            $username = $this->session->userdata('username');
        }

        $data['user'] = $this->user->findByUsername($username);
        $data['followers'] = $this->follows->findFollowersByUserId($data['user']->id);
        $data['pweets'] = $this->pweet->findPweets($data['user']->id);
        $data['following'] = $this->follows->findFollowingByUserId($data['user']->id);

        $this->load->view('template/_header');
        $this->load->view('profile/view', $data);
        $this->load->view('template/_footer');
    }

    public function index()
    {
        if (! $this->session->userdata('username')) {
            redirect('main/index');
        }
        $username = $this->session->userdata('username');

        $data['user'] = $this->user->findByUsername($username);
        $data['followers'] = $this->follows->findFollowersByUserId($data['user']->id);
        $data['following'] = $this->follows->findFollowingByUserId($data['user']->id);
        $data['timeline'] = $this->pweet->findContentByUsers($data['following'], $data['user']->id);
        $data['pweets'] = $this->pweet->findPweets($data['user']->id);

        $this->load->view('template/_header');
        $this->load->view('profile/index', $data);
        $this->load->view('template/_footer');
    }

    public function newpweet()
    {
        if (! $this->session->userdata('username')) {
            redirect('main/index');
        }

        $data = [
            'content' => htmlentities($this->input->post('content')),
            'user_id' => $this->input->post('user_id'),
            'insert_date' => time()
        ];

        $this->pweet->saveContent($data);
        redirect('/profile/view/' . $this->input->post('username'));
    }

    public function create()
    {
        $this->load->view('template/_header', array('removeTopo' => true));
        $this->load->view('profile/create');
        $this->load->view('template/_footer');
    }

    public function createNow()
    {
        $this->user->setusername($this->input->post('username'));
        $this->user->setpassword($this->input->post('password'));
        $this->user->setemail($this->input->post('email'));
        $this->user->setabout($this->input->post('about'));

        $this->user->save();
        redirect('profile/view/' . $this->user->getusername());
    }

    public function update()
    {
        if (! $this->session->userdata('username')) {
            redirect('main/index');
        }

        $user = $this->user->findByUsername($this->session->userdata('username'));

        $this->load->view('template/_header');
        $this->load->view('profile/update', ['user' => $user]);
        $this->load->view('template/_footer');
    }

    public function updateNow()
    {
        if (! $this->session->userdata('username')) {
            redirect('main/index');
        }

        $this->user->findByUsername($this->session->userdata('username'));

        $this->user->setId($this->input->post('id'));
        $this->user->setUsername($this->input->post('username'));
        $this->user->setPassword($this->input->post('password'));
        $this->user->setEmail($this->input->post('email'));
        $this->user->setAbout($this->input->post('about'));

        $this->user->update();
        $_SESSION['username'] = $this->input->post('username');

        redirect('profile/view');
    }
}
