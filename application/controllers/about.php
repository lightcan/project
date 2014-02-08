<?php

/**
 * Our homepage.
 * 
 * controllers/about.php
 *
 * ------------------------------------------------------------------------
 */
class About extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'About';
        $this->data['pagebody'] = 'about';
        $this->render();
    }

}

/* End of file about.php */
/* Location: application/controllers/about.php */