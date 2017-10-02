<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	function __construct() {
		parent::__construct();
	 	$this->load->model('user/MUser');
	}
	

	public function userLogin()
	{	
		$this->viewDashBoard();
	}
	public function viewDashBoard(){
		//use the loded MUserModel
		$data['users'] = $this->MUser->getAllUsers();

		$this->data['custom_js']= '<script type="text/javascript">
                              $(function(){
                              	$("#dash").addClass("active");
                              });
                        </script>';
                        
		$this->load->view('imports/vHeader');
		$this->load->view('vSample',$data);		
		$this->load->view('imports/vFooter',$this->data);
	}
	
	Gwapo si Diez!
}
?>
