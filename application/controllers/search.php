<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of VideoUpload
 *
 * @author https://www.roytuts.com messed about with by Lee Disley
 */
class search extends CI_Controller {

	public function index() {
		$data['query'] = $this->load->model (Search_model);
		$this->load->view(‘Search_view’, $data);
	}
}
