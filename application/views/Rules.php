<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Assignment</title>
        <link href='assets/css' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    </head>
    <body>
	
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		
		<h1>The Teaching Forum</h1>
	
	
        <h1>Welcome <?= $this->session->userdata('username') ?></h1>
		
		
		<h3>Welcome to our forum where teachers can view and upload videos and comments based on their experience in teaching to help other members of the community.</h3>
		
		
        <a href="<?= site_url('home/logout') ?>"><button type="submit">Log Out</button></a>
        <a href="<?= site_url('user_ctrl') ?>"><button type="submit">Register your details</button></a>
      
       
       
        
      
        
        
    </body>
</html>

