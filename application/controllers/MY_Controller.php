<?php
if(!defined('BASEPATH'))exit ("No direct script allowed.");
class MY_Controller extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->helper('language');

        //Loading the language file
        $this->lang->load('en_admin','english');
    }

}