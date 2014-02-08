<?php

/**
 * Contact pag
 * 
 * controllers/contact.php
 *
 * ------------------------------------------------------------------------
 */
class Contact extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'AppAttack';
        $this->data['pagebody'] = 'contact';
        $this->render();
    }

}

/* End of file contact.php */
/* Location: application/controllers/blog.php */