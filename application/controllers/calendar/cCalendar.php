<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cCalendar extends CI_Controller {

	function __construct() {
		parent::__construct();
	 	$this->load->model('calendar/MCalendar');
	}
	
	public function index()
	{
		$this->data['custom_js']= '<script type="text/javascript">
                              $(function(){
                              	$("#cal").addClass("active");
                              });
                        </script>';
		$data['event_data'] = $this->MCalendar->getAllEvents();
		$this->load->helper('url');
		$this->load->view('imports/vHeader');
		$this->load->view('calendar/vCalendar.php',$data);
		$this->load->view('imports/vFooter',$this->data);
	}
	
	public function AddEvent()
	{
		if (isset($_POST['title']) && isset($_POST['event_detail']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['event_category']) && isset($_POST['event_venue']) && isset($_POST['event_ticket_price']) && isset($_POST['event_ticket_type']) && isset($_POST['event_ticket_total_no']) && isset($_POST['event_ticket_discount'])
		){
	
			$title = $_POST['title'];
			$event_detail = $_POST['event_detail'];
			$start = $_POST['start'];
			$end = $_POST['end'];
			$event_category= ($_POST['event_category']==-1)?NULL:$_POST['event_category'];
			$event_venue= $_POST['event_venue'];
			$event_ticket_price= $_POST['event_ticket_price'];
			$event_ticket_type =$_POST['event_ticket_type'];
			$event_ticket_total_no= $_POST['event_ticket_total_no'];
			$event_ticket_discount= $_POST['event_ticket_discount'];
			
			$data = array(
				'event_date_start'=>$start,
				'event_date_end'=>$end,
				'no_tickets_total'=>$event_ticket_total_no,
				'event_status'=>"Approved",
				'event_name'=>$title,
				'event_details'=>$event_detail,
				'event_category'=>$event_category,
				'event_venue'=>$event_venue,
				'user_id'=>3
			);
			
			$this->MCalendar->insert($data);
			
			redirect($_SERVER['HTTP_REFERER']);
			
		}
	}

	public function ajaxUpdate()
	{
		if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
			$id = $_POST['Event'][0];
			$start = $_POST['Event'][1];
			$end = $_POST['Event'][2];
			
			$data = array(
				'event_date_start'=>$start,
				'event_date_end'=>$end,
			);
			
			if($this->MCalendar->update($id,$data)){
				echo "OK";
			}else{
				echo "Error";
			}
			
			
			
<<<<<<< HEAD
			}
		}

		if($this->MCalendar->update($id,$data)){
			echo "OK";
		}else{
			echo "Error";

			// $sql = "UPDATE register_event SET  petition_date_start = '".$start."', petition_date_end = '".$end."' WHERE petition_id = ".$id." ";

=======
			// $sql = "UPDATE register_event SET  petition_date_start = '".$start."', petition_date_end = '".$end."' WHERE petition_id = ".$id." ";
>>>>>>> parent of 7f57d5a... Added update and delete function
		}
	}
}
