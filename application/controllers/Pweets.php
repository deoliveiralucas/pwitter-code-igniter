<?php

class Pweets extends CI_Controller
{
    public function newpweet()
    {
        $data = [
            'content' => $this->input->post('content'),
            'user_id' => $this->input->post('user_id'),
            'insert_date' => date('Y-m-d H:i:s')
        ];

        $this->pweet->saveContent($data);
        redirect('/profile/index/' . $this->input->post('username'));
    }
}
