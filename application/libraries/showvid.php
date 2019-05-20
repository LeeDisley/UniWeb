<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class showvid extends CI_Controller{


public function show(){
		// Connection to DBase to display videos in reverse id order
		$this->load->library("session");
		$owner = $this->session->userdata('id');
		$mysqli = new mysqli("localhost","root", "", "college");
		$result = $mysqli->query ("SELECT description, filename, extension FROM videos WHERE owner = '$owner' ORDER BY videos_id ASC LIMIT 5" )
			or die("SELECT error: ".mysql_error());
		
		print "<table border=1>\n"; 
		while ($row = mysqli_fetch_array ($result))
		{ 
			$videos_field= $row['filename'];
			$video_show= "Upload/$videos_field";
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
	}
}