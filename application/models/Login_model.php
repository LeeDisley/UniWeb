<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: Login model
 * @author: Toni Ellis
 */
class Login_model extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('password', md5($data['password']));
        return $this->db->get('userss')->row();
    }
 
    function __destruct() {
        $this->db->close();
    }
}
