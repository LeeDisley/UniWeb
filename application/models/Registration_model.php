<?php
 
class Registration_model extends CI_Model
{
  
  public function Insert_user($name, $email, $password){
    $query = $this->db->query("INSERT INTO users (username, email, password) VALUES ('$name', '$email', md5('$password'))");
  }
 
 
 
 
  
  }