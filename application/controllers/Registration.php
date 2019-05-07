<?php
class Registration extends CI_Controller
{
  
	
  
 
  public function index(){
    if($this->session->login == 'true'){
      redirect('/');
    }
    //echo "register";
    $this->load->model('registration_model', 'auth');
    $this->load->view('header');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passwordagain', 'Password Confirmation', 'required|matches[password]');
    
    //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
 
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registration');
                }
                else
                {
                        $this->load->view('register-update');
                }
    //$this->load->view('registration');
    $this->load->view('footer');
  }
  }
 
  
  

?>