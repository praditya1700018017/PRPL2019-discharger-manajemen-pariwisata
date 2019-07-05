<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$data['title'] = 'my profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email') ])->row_array();
		
		redirect(base_url('mudahpiknik/index.php/admin/products'));

	}



}