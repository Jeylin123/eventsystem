<?php
	class MEventInfo extends CI_model {
		private $event_id;
		private $date_sale_start;
		private $date_sale_end;
		private $no_tickets_total;
		
		const DB_TABLE = "event_info";
    	const DB_TABLE_PK = "event_id";

    	public function __construct(){

		}

		public function getEvent_id(){
			return $this->event_id;
		}

		public function setEvent_id($event_id){
			$this->event_id = $event_id;
		}

		public function getDate_sale_start(){
			return $this->date_sale_start;
		}

		public function setDate_sale_start($date_sale_start){
			$this->date_sale_start = $date_sale_start;
		}

		public function getDate_sale_end(){
			return $this->date_sale_end;
		}

		public function setDate_sale_end($date_sale_end){
			$this->date_sale_end = $date_sale_end;
		}

		public function getNo_tickets_total(){
			return $this->no_tickets_total;
		}

		public function setNo_tickets_total($no_tickets_total){
			$this->no_tickets_total = $no_tickets_total;
		}
	}
?>