<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: search model
 * @author: Lee Disley
 */
class Search_model extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
		$this->db->from('userss');
	}
	public function get_search(){
		$match = $this->input->post(‘search’);
		$this->db->like(‘username’,$match);
		
		$query = $this->db->get(‘id’);
  return $query->result();