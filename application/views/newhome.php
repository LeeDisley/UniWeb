<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Majister Video Upload</title>
        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }            

            #body {
                margin: 0 15px 0 15px;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }

            .error {
                color: #E13300;
            }

            .success {
                color: darkgreen;
            }
        </style>
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
		  
		  </ul>
		</nav>
	 <a href="<?= site_url('home/logout') ?>"><button type="submit">Log Out</button></a>
        <div id="container">
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
                    echo '<video width="320" height="240" controls>
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
		<!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1547383813219");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
    </body>
</html>