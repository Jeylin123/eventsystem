<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CReports extends CI_Controller {


	public function index()
	{	
		$this->data['custom_js']= '<script type="text/javascript">
                              $(function(){
                              	$("#rep").addClass("active");
                              });
                        </script>';
		$this->load->view('imports/vHeader');
		$this->load->view('reports/vReports.php');
		$this->load->view('imports/vFooter',$this->data);
	}
}
