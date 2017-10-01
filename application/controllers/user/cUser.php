<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUser extends CI_Controller {


	public function index()
	{
		$this->data['custom_js']= '<script type="text/javascript">
                              $(function(){
                              	$("#user").addClass("active");
                              });
                        </script>';
		$this->load->view('imports/vHeader');
		$this->load->view('user/vUser.php');
		$this->load->view('imports/vFooter',$this->data);
	}
}
