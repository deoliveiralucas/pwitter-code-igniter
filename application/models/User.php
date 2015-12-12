<?php

class User extends CI_Model
{
    public $id;
    public $username;
    public $password;
    public $email;
    public $about;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function findByUsername($username)
    {
        $query = $this->db->get_where('user', ['username' => $username], 1);
        return $query->row();
    }
}