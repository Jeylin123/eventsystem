<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cEvent extends CI_Controller {

	public function __construct()
	{
    	parent::__construct();
    	$this->load->model('user/MEvent');
    	$this->load->model('user/MUser');
    	$this->load->model('user/MTicketType');
    }


	public function index()
	{
		
	}

	public function viewCreateEvent() 
	{
		$this->data['custom_js']= '<script type="text/javascript">
                              	$("#user").addClass("active");
                        </script>';
		$this->load->view('vCreateEvent');
		// $this->load->view('imports/vHeader.php');
		// // $this->load->view('event/vEvent.php');
		// //$this->load->view('googlemap.php');
		// $this->load->view('imports/vFooter',$this->data);
		
	}
	public function viewEvents()
	{
		$data['events'] = $this->MEvent->getAllEventsByUser($this->session->userdata['userSession']->userID);
		$this->load->view('imports/vHeaderLandingPage');		
		$this->load->view('vEvents',$data);
		$this->load->view('imports/vFooterLandingPage');	
	}
	public function displayEventDetails($id)
	{
		
		$uid = null; //to get organize name
		$eid = null;
		
		$data1 ['events'] = $this->MEvent->loadEventDetails($id);
		$gID = $this->MEvent->loadEventDetails($id);

		foreach ($gID as $k) {
			$eid = $k->event_id;
			$uid = $k->user_id; //retrieve
		}

		// print_r($uid);
		$data2['organizer']	= $this->MUser->loadUserDetails($uid);

		$data3['types'] = $this->MTicketType->loadType($eid);

		$data = array_merge($data1,$data2,$data3); 
		 // print_r($data);

		$this->load->view('imports/vHeaderLandingPage');		
		$this->load->view('vEventDetails',$data);
		$this->load->view('imports/vFooterLandingPage');


		// $this->load->view('imports/vHeader');
		// $this->load->view('user/vEventRegistration', $data);
		// $this->load->view('imports/vFooter');
		# code...
	}
	public function going($id)
		{
			// print_r($id);
			$type = new MTicketType();
			$where = array('event_id' => $id );
			$data['tickets'] = $type->loadType($id);


			$this->load->view('imports/vHeader');
			$this->load->view('user/vGoing', $data);
			$this->load->view('imports/vFooter');
			
			# code...
		}
	public function createEvent(){
		// $this->load->model('events/mEvent','event');

		$data['event_date_start'] = $this->input->post('event_date_start').$this->input->post('event_time_start');
		$data['event_date_end'] = $this->input->post('event_date_end').$this->input->post('event_time_end');
		$data['no_tickets_total'] = 0;
		$data['event_status'] = 'pending';
		$data['event_name'] = $this->input->post('event_name');
		$data['event_details'] = $this->input->post('event_details');
		$data['event_category'] = $this->input->post('event_category');
		$data['event_venue'] = $this->input->post('event_venue');
		$data['date_created'] = date('Y-m-d H:i:s');

		 $data['user_id'] = $this->session->userdata['userSession']->userID;

		$affectedRows = $this->MEvent->insert($data);

		$evt_id = $this->MEvent->db->insert_id();

		$totalNumTix = 0;
		$data1['ticket_name'] = $this->input->post('ticketType1');
		$data1['ticket_count'] = $this->input->post('no_tickets_total1');
		$data1['price'] = $this->input->post('price_tickets_total1');

		$data1['event_id'] = $evt_id;
		$totalNumTix += $data1['ticket_count'];
		$this->MTicketType->insert($data1);

		if($this->input->post('ticketType2')||$this->input->post('no_tickets_total2')||$this->input->post('no_tickets_total2')){
			$data1['ticket_name'] = $this->input->post('ticketType2');
			$data1['ticket_count'] = $this->input->post('no_tickets_total2');
			$data1['price'] = $this->input->post('price_tickets_total2');

			$data1['event_id'] = $evt_id;
			$totalNumTix += $data1['ticket_count'];
			$this->MTicketType->insert($data1);
		}

		if($this->input->post('ticketType3')||$this->input->post('no_tickets_total3')||$this->input->post('no_tickets_total3')){
			$data1['ticket_name'] = $this->input->post('ticketType3');
			$data1['ticket_count'] = $this->input->post('no_tickets_total3');
			$data1['price'] = $this->input->post('price_tickets_total3');

			$data1['event_id'] = $evt_id;
			$totalNumTix += $data1['ticket_count'];
			$this->MTicketType->insert($data1);
		}

		$where =  array('no_tickets_total' => $totalNumTix );
		$res = $this->MEvent->update($evt_id,$where);
		if($res){
			redirect('event/cEvent/viewEvents');
		}else{
			redirect('event/cEvent/viewCreateEvent');
		}

	}

	public function deleteEvent($id){
		$this->load->model('events/mEvent','event');

		
		// $event_id = $this->input>post('event_id');

		$result = $this->event->deleteEvent($id);

		redirect('event/cEvents/index');


		//code for tests purposes
		/*
		$this->event->deleteEvent(18);
		*/
	}

	public function updateEvent(){
		$this->load->model('events/mEvent','event');

		$event_id = $this->input->post('event_id');
		$event_date_start = $this->input->post('event_date_start');
		$event_date_end = $this->input->post('event_date_end');
		$no_tickets_total = $this->input->post('no_tickets_total');
		$event_status = $this->input->post('event_status');
		$event_name = $this->input->post('event_name');
		$event_details = $this->input->post('event_details');
		$event_category = $this->input->post('event_category');
		$event_venue = $this->input->post('event_venue');

		//code for tests purposes
		/*
		$event_id = 18;
		$event_date_start = '2017-10-01 12:12:12';	
		$event_date_end = '2017-10-01 12:12:12';
		$no_tickets_total = 15;
		$event_status = 'Approved';
		$event_name = 'Suntukan ng mga SHS sa Bunzel Lobby';
		$event_details = 'Bak-bakan na!';
		$event_category = 'Training';
		$event_venue = 'Consolacion Central Elementary School, Consolacion, Central Visayas, Philippines';
		*/
		//end of code snippet

		$data = array('event_date_start'=>$event_date_start,
					  'event_date_end'=>$event_date_end,
					  'no_tickets_total'=>$no_tickets_total,
					  'event_status'=>$event_status,
					  'event_name'=>$event_name,
					  'event_details'=>$event_details,
					  'event_category'=>$event_category,
					  'event_venue'=>$event_venue);

		$this->event->updateEvent($event_id,$data);
		}


		public function upcomingEvents(){
			$this->load->model('events/mEvent','Event');
			$data['events'] = $this->Event->showUpcomingEvents();

			// print_r($data);
			$this->load->view('imports/vHeader');
			$this->load->view('user/vUpcoming.php', $data);
			$this->load->view('imports/vFooter');

		// $this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
}
?>