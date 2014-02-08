<?php

/**
 * app page.
 * 
 * controllers/apps.php
 *
 * ------------------------------------------------------------------------
 */
class Apps extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['title'] = 'AppAttack';
        $this->data['pagebody'] = 'apps';
        $this->render();
    }

}

/* End of file blog.php */
/* Location: application/controllers/blog.php */