<?php
	class MCalendar extends MY_model {
		private $event_id;
		private $event_date_start;
		private $event_date_end;
		private $no_tickets_total;
		private $event_status;
		private $event_name;
		private $event_details;
		private $event_category;
		private $event_venue;
		private $date_created;
		private $user_id;

		const DB_TABLE = "event_info";
    	const DB_TABLE_PK = "event_id";

    	public function __construct(){
			$this->DB_TABLE = "event_info";
			$this->DB_TABLE_PK = "event_id";
		}
		
		public function getAllEvents(){
			//Sample code
			//find read_all function at application/core/MY_Model.php
			$query = $this->read_all();
			return $query;			             
		}
		
		public function insertNewEvent(){
			
		}

	}
?>