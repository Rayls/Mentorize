<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){
		$this->load->view('main.html');
	}

	public function page(){
		$this->load->model('user_model');

		$data['testvar'] = "Aye Carumba! :O";

		$data['users'] = $this->user_model->get_users();
		$this->load->view('testdata', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */