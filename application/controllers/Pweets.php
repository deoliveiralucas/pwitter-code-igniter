<?php

class Pweets extends CI_Controller
{   
    public function newpweet()
    {
        $data = [
            'content' => $this->input->post('content'),
            'user_id' => $this->input->post('user_id'),
            'insert_date' => time()
        ];
        
        $this->pweet->saveContent($data);
        redirect('/main/index/' . $this->input->post('username'));
    }
}