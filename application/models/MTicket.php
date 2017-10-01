
<?php
	class MTicket extends CI_model {
		private $ticket_id;
		private $price;
		private $type;
		private $event_id;
		private $petition_id;


		const DB_TABLE = "ticket";
    	const DB_TABLE_PK = "petition_id";

    	public function __construct(){

		}


		public function getTicket_id(){
			return $this->ticket_id;
		}

		public function setTicket_id($ticket_id){
			$this->ticket_id = $ticket_id;
		}

		public function getPrice(){
			return $this->price;
		}

		public function setPrice($price){
			$this->price = $price;
		}

		public function getType(){
			return $this->type;
		}

		public function setType($type){
			$this->type = $type;
		}

		public function getEvent_id(){
			return $this->event_id;
		}

		public function setEvent_id($event_id){
			$this->event_id = $event_id;
		}

		public function getPetition_id(){
			return $this->petition_id;
		}

		public function setPetition_id($petition_id){
			$this->petition_id = $petition_id;
		}
	}
?>
