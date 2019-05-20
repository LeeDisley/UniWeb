<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Majister Video Upload</title>
        <link href='assets/css' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

            
            

            
     </head>
    <body>
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
			<form action="search" method="get">
			<input type="text" name="query" placeholder="Search Users"/>
			<input type="submit" value="Search"/>
			</form>
			<!--<input type="text" class ="searchBox" id="searchBox"></input>
			<input type="submit" value="Search" class="btnInput" id="btnInput"> </input> -->
				
		  </ul>
		</nav>
		
	 <a href="<?= site_url('home/logout') ?>"><button type="submit">Log Out</button></a>
	
		
        <div id="container" class='container'>
		<div class='row'>
			<div class='col-md-6'>
            <h1>Majister Video Upload</h1>
			<h2>Welcome <?= $this->session->userdata('username') ?></h2>
			
            <div id="body">
                <p>Select a video file to upload</p>
                <?php
                if (isset($success) && strlen($success)) {
                    echo '<div class="success">';
                    echo '<p>' . $success . '</p>';
                    echo '</div>';
                    
                    //traditional video play
                    /*echo '<object width="338" height="300">
                      <param name="src" value="' . $video_path . '/' . $video_name . '">
                      <param name="autoplay" value="false">
                      <param name="controller" value="true">
                      <param name="bgcolor" value="#333333">
                      <embed type="' . $video_type . '" src="' . $video_path . '/' . $video_name . '" autostart="false" loop="false" width="338" height="300" controller="true" bgcolor="#333333"></embed>
                      </object>';*/

                    //HTML5 video play
					
                    echo '<video width="320" height="240" autoplay controls>
                      <source src="' . $video_path . '/' . $video_name . '" type="' . $video_type . '">
                      Your browser does not support the video tag.
                      </video>';
                }
                if (isset($errors) && strlen($errors)) {
                    echo '<div class="error">';
                    echo '<p>' . $errors . '</p>';
                    echo '</div>';
                }
                if (validation_errors()) {
                    echo validation_errors('<div class="error">', '</div>');
                }
                ?>
                <?php
                $attributes = array('name' => 'video_upload_form', 'id' => 'video_upload_form');
                echo form_open_multipart($this->uri->uri_string(), $attributes);
                ?>
                <p><input name="video_name" id="video_name" readonly="readonly" type="file" /></p>
                <p><input name="video_upload" value="Upload Video" type="submit" /></p>
                <?php
                echo form_close();
                ?>
            </div>
			</div>
			<div class='col-md-6'>
				<?php
					$mysqli = new mysqli("localhost","root", "", "college");
					$result = $mysqli->query ("SELECT description, filename, extension FROM videos WHERE owner = '$owner' ORDER BY videos_id DESC LIMIT 5" )
						or die("SELECT error: ".mysql_error());
					
					print "<table border=1>\n"; 
					while ($row = mysqli_fetch_array ($result))
					{ 
						$videos_field= $row['description'];
						$video_show = base_url() . '/upload/' . $videos_field;
						$descriptionvalue= $row['description'];
						$fileextensionvalue= $row['extension'];
						print "<tr>\n"; 
						print "\t<td>\n"; 
						echo "<font face=arial size=4/>$descriptionvalue</font>";
						print "</td>\n";
						print "\t<td>\n"; 
						echo "<div align=center, float:right><video width='320' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser does
						not support the video tag.</video></div>";
						print "</td>\n";
						print "</tr>\n"; 
					} 
					print "</table>\n"; 
				?>
			</div>
			</div>

        </div>
		
		<div id="videoList">
			
		<!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1547383813219");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
    </body>
</html>