<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {


	public function index()
	{
		$this->data['custom_js']= '<script type="text/javascript">
                              $(function(){
                              	$("#admin").addClass("active");
                              });
                        </script>';
		$this->load->view('imports/vHeader');
		$this->load->view('admin/vAdmin.php');
		$this->load->view('imports/vFooter',$this->data);

	}
}
