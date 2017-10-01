<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cCalendar extends CI_Controller {


	public function index()
	{
		$this->data['custom_js']= '<script type="text/javascript">
                              $(function(){
                              	$("#cal").addClass("active");
                              });
                        </script>';
		
		$this->load->view('imports/vHeader');
		$this->load->view('calendar/vCalendar.php');
		$this->load->view('imports/vFooter',$this->data);
	}
}
