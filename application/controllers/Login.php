<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name Login.php
 * @author Toni Ellis
 */
class Login extends CI_Controller
{
 
    function __construct() {
        parent::__construct();
        $this->load->model("Login_model", "login");
        if(!empty($_SESSION['id']))
            redirect('newhome');
    }
 
    public function index() {
        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id' => $result->id,
                    'username' => $result->username
                ];
 
                $this->session->set_userdata($data);
                redirect('newhome');
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong, Please try again');
                redirect('login');
            }
        }
 
        $this->load->view("login");
    }
}
