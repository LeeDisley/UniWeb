<?php 
class Registration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	public function index()
	{
		if ($this->input->post('register'))
		{
			$n=$this->input->post('name');
			$e=$this->input->post('email');
			$p=$this->input->post('pass');
			$m=$this->input->post('mobile');
			$c=$this->input->post('course');
			
			$que=$this->db->query("select * from user where email='".$e."'");
			$row=$que->num_rows();
			if($row)
			{
				$data['error']="<h3 style='color:red'>This user already exists</h3>";
			}
			else
			{
				$que=$this->db->query("insert into user values('','$n','$e','$p','$m','$c')");
				
				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}
		}
	$this->load->view('registration',@$data);
	}
}
?>
