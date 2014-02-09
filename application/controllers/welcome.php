<?php

/**
 * Our homepage.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
        $this->load->model('post');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'My Wonderful Webapp';
        $this->data['pagebody'] = 'welcome';
        $this->data['post'] = $this->post->getAll_array();
        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */