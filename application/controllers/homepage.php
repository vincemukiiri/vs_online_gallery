<?php

class Homepage extends CI_Controller {

    function index() {
        $elements = array(
            'main_content' => 'homepage_view',
            'title' => 'Home',
            'user' => 'user',
        );
        $this->load->view('includes/template', $elements);
    }
}
