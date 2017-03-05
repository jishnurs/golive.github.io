<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class
 */
class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UsersDatatable');
    }


    public function allUsers()
    {
    	$this->load->view('allusers');
    }
}