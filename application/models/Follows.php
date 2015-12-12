<?php

class Follows extends CI_Model
{
    private $id;
    private $sourceUser;
    private $targetUser;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getSourceUser()
    {
        return $this->sourceUser;
    }

    public function getTargetUser()
    {
        return $this->targetUser;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setSourceUser($sourceUser)
    {
        $this->sourceUser = $sourceUser;
    }

    public function setTargetUser($targetUser)
    {
        $this->targetUser = $targetUser;
    }
    
    public function findFollowersByUserId($userId)
    {
        $query = $this->db->get_where('follows', ['target_user' => $userId]);
        return $query->result();
    }
    
    public function findFollowingByUserId($userId)
    {
        $query = $this->db->get_where('follows', ['source_user' => $userId]);
        return $query->result();
    }
}
