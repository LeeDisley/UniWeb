<?php

class user_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('user_model');
}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'FirstName', 'required|min_length[5]|max_length[15]');

//Validating LastName Field
$this->form_validation->set_rules('dnamee', 'LastName', 'required|min_length[5]|max_length[50]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|min_length[10]|max_length[50]');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[5]|max_length[50]');

//Validating Gender Field
$this->form_validation->set_rules('dgender', 'Gender', 'required|min_length[4]|max_length[50]');

//Validating NHS ID Number Field
$this->form_validation->set_rules('dnhs', 'NHS', 'required|min_length[4]|max_length[50]');

//Validating Height Field
$this->form_validation->set_rules('dheight', 'Height', 'required|min_length[1]|max_length[50]');

//Validating Weight Field
$this->form_validation->set_rules('dweight', 'Weight', 'required|min_length[1]|max_length[50]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('user_view');
} else {
//Setting values for tabel columns
$data = array(
'FirstName' => $this->input->post('dname'),
'LastName' => $this->input->post('dname'),
'Email' => $this->input->post('demail'),
'Address' => $this->input->post('daddress'),
'Gender' => $this->input->post('dgender'),
'NHS' => $this->input->post('dnhs'),
'Height' => $this->input->post('dheight'),
'Weight' => $this->input->post('dweight')
);
//Transfering data to Model
$this->user_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('user_view', $data);
}
}

}

?>
