<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_Auth');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('login_page');		

		} else {
			$username = $this->input->post('username');
			$password =	$this->input->post('password');

			$user = $this->Model_Auth->getUsername($username);

			if ($user) {

				if (password_verify($password, $user['admin_password'])) {
					$data = array(
						'username' => $user['admin_username'],
						'name' => $user['admin_nama']
					);
					
					$this->session->set_userdata($data);
					redirect('admin');
				}else{
					echo "<script>
					alert('Password anda salah !!');
					window.location.href='".base_url()."';
					</script>";
				}
			}else{
				echo "<script>
				alert('Username tidak ditemukan !!');
				window.location.href='".base_url()."';
				</script>";
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		echo "<script>
		window.location.href='".base_url()."';
		</script>";
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */