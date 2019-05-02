<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Assignment</title>
        <link href='assets/css' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
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

		<br></br>
		<br></br>

		
		<h1>The Teaching Forum</h1>
		
	
	
		<br></br>
	
        <h2>Welcome <?= $this->session->userdata('username') ?></h2>
		
		<br></br>
		
		
		<h3>Welcome to our forum where teachers can view and upload videos and comments based on their experience in teaching to help other members of the community.</h3>
		
		<br></br>
			<br></br>
				<br></br>
				
				
				<h1>Online Forum... Ask your questions below: </h1>
				
					<!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1547383813219");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
				
				<!-- start Feedback --><script data-sil-id='5c3b32c64c31fb001b56ef8a'> (function() {var d = document, w = window, l = window.location,p = l.protocol == 'file:' ? 'http://' : '//';if (!w.WS) w.WS = {}; c = w.WS;var m=function(t, o){ var e = d.getElementsByTagName('script'); e=e[e.length-1]; var n = d.createElement(t); if (t=='script') {n.async=true;} for (k in o) n[k] = o[k]; e.parentNode.insertBefore(n, e)}; m('script', { src: p+'bawkbox.com/widget/feedback/5c3b32c64c31fb001b56ef8a?page='+encodeURIComponent(l+''), type: 'text/javascript' }); c.load_net = m;})();</script><div class='sil-widget-feedback sil-widget' id='sil-widget-5c3b32c64c31fb001b56ef8a'><a href='https://bawkbox.com/install/feedback'></a></div><!-- end Feedback -->

		
        <a href="<?= site_url('home/logout') ?>"><button type="submit">Log Out</button></a>
 
      <br></br>
	  <br></br>
	  <br></br>
       
       
        
      
        
        
    </body>
</html>

