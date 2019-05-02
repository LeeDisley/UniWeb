<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Home.php
 * @author Toni Ellis
 */
class questions extends CI_Controller
{
 
    function __construct() {
        parent::__construct();
 
        if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }
 
    public function index() {
        $this->load->view('questions');
    }
 
    public function logout() {
        $data = ['id_user', 'username'];
        $this->session->unset_userdata($data);
 
        redirect('questions');
    }
}
