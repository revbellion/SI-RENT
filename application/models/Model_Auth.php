<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Auth extends CI_Model {
	public function getUsername($username)
	{
		return $this->db->get_where('admin',['admin_username' => $username])->row_array();
	}
	

}

/* End of file Model_Auth.php */
/* Location: ./application/models/Model_Auth.php */