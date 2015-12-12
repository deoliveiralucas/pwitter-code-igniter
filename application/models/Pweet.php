<?php

class Pweet extends CI_Model
{
    private $id;
    private $UserId;
    private $content;
    private $insertDate;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->UserId;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getInsertDate()
    {
        return $this->insertDate;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;
    }

    public function findContentByUsers($users)
    {
        $userIds = [];
        foreach ($users as $user) {
            $userIds[] = $user->target_user;
        }

        $this->db->select('*');
        $this->db->from('pweet');
        $this->db->where_in('user_id', $userIds);
        $this->db->order_by('id DESC');

        $contents = $this->db->get()->result_array();

        $userContents = [];
        foreach ($contents as $key => $content) {
            $res = $this->db->get_where('user', ['id' => $content['user_id']], 1);
            $userContents[$key] = $content;
            $userContents[$key]['user'] = $res->row();
        }

        return $userContents;
    }

    public function saveContent($data)
    {
        return $this->db->insert('pweet', $data);
    }

    public function findPweets($userId)
    {
        $this->db->select('*');
        $this->db->from('pweet');
        $this->db->join('user', 'pweet.user_id = user.id');
        $this->db->where('pweet.user_id', $userId);
        $this->db->order_by('pweet.id DESC');

        return $this->db->get()->result_array();
    }
}
