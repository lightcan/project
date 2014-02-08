<?php

/**
 * Our homepage.
 * 
 * controllers/blog.php
 *
 * ------------------------------------------------------------------------
 */
class Blog extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'AppAttack';
        $this->data['pagebody'] = 'blog';
        $this->render();
    }

}

/* End of file blog.php */
/* Location: application/controllers/blog.php */