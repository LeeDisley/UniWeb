<?php 

class newhome_model extends CI_model

{
	public function Insert_Video ($video_data, $upload_path, $video_data, $owner){
		$query = $this->db->query ("INSERT INTO videos (description, filename, extension, owner) VALUES ($video_data, $upload_path, $video_data, $owner)");
	}
}
	