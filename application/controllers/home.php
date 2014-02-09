<?php

/**
 * Our homepage.
 * 
 * controllers/home.php
 *
 * ------------------------------------------------------------------------
 */
class Home extends Application {

    function __construct() {
        parent::__construct();
        $this->load->model('posts');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'My Wonderful Webapp';
        $this->data['pagebody'] = 'home';
        $this->data['post'] = $this->post->getAll_array();
        $this->render();
    }

}

/* End of file home.php */
/* Location: application/controllers/home.php */