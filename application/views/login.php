<!DOCTYPE html>
<html lang="en">

<head>
  <title>Teaching Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
    
</head>

<body>
    <div class="container-fluid">

	    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="login">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="about">About</a>
		    </li>
			 <li class="nav-item">
		      <a class="nav-link" href="questions">Q+A</a>
		    </li>
		  
		  </ul>
		</nav>

<div class="flex-center position-ref content-height">
    <div class="content">
        <div class="title m-b-md">

        </div>
        <div class="links">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
<div id="wrap">
<div id="header">
<h3><a href="#"><marquee> Welcome To The Teaching Forum... Enjoy :)<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = d;
</script></marquee> </a></h1>

</div>
<div class="tcycle"  data-timeout="1000">

</div>


		<center>
		<img src="http://www.htmlcommentbox.com/storage/lg_14217195_education-teachers-forum-logo-2.jpg" alt="Logo" width="350" height="200" align="middle">
		</center>
	
	

	
	
	<div style="text-align: center;">
	<h1>Welcome to The Teaching Forum</h1>
    
    <h2 align="center">Login</h2>
    
    
    <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>
<center>
    
        
    <form action="<?= site_url('login') ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" /><br></br>
        <label for="password">Password:</label>
        <input type="password" name="password" /><br></br>
        <button type="submit">Login</button>
		
    </form>
	
	<center><b>Not registered ?</b> <br></b><a href="<?php echo base_url().'index.php/Registration'; ?>">Register here</a></center><!--for centered text-->
    </div>
	
	<br></br>

</center>
</body>

</html>

