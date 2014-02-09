<?php

class Post extends _Mymodel {

// Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('post', 'id');
        //$this->setTable('post', 'id');
       // $this->load->database();
       // $query = $this->db->get('post')
       //
    }
    /*
    function post_getall()
    {
       $this->load->database();
        $query = $this->db->get('post');
        return $query->result();
    }
     * */
     

}
