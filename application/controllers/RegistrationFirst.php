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
			$f=$this->input->post('firstname');
			$l=$this->input->post('lastname');
			$e=$this->input->post('email');
			$u=$this->input->post('username');
			$p=$this->input->post('password');
			$a=$this->input->post('address');
			$g=$this->input->post('gender');
			$n=$this->input->post('NHS');
			$h=$this->input->post('height');
			$w=$this->input->post('weight');
			
			$que=$this->db->query("select * from users where email='".$e."'");
			$row=$que->num_rows();
			if($row)
			{
				$data['error']="<h3 style='color:red'>This user already exists</h3>";
			}
			else
			{
				$que=$this->db->query("insert into users values('','$f','$l','$u','$a','$g','$n','$h','$w')");
				$que=$this->db->query("insert into userss values ('','$u','$p')");
				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}
		}
	$this->load->view('registration',@$data);
	}
}
?>
