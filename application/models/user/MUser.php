<?php
	class MUser extends MY_model {
		private $account_id;
		private $user_name;
		private $first_name;
		private $last_name;
		private $middle_initial;
		private $email;
		private $birthdate;
		private $gender;
		private $contact_no;

		const DB_TABLE = "user_account";
    	const DB_TABLE_PK = "account_id";

    	public function __construct(){

		}

		public function getAllUsers(){
			//Sample code
			//find read_all function at application/core/MY_Model.php
			$query = $this->read_all();
			return $query;			             
		}

		public function getAccount_id(){
			return $this->account_id;
		}

		public function setAccount_id($account_id){
			$this->account_id = $account_id;
		}

		public function getUser_name(){
			return $this->user_name;
		}

		public function setUser_name($user_name){
			$this->user_name = $user_name;
		}

		public function getFirst_name(){
			return $this->first_name;
		}

		public function setFirst_name($first_name){
			$this->first_name = $first_name;
		}

		public function getLast_name(){
			return $this->last_name;
		}

		public function setLast_name($last_name){
			$this->last_name = $last_name;
		}

		public function getMiddle_initial(){
			return $this->middle_initial;
		}

		public function setMiddle_initial($middle_initial){
			$this->middle_initial = $middle_initial;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getBirthdate(){
			return $this->birthdate;
		}

		public function setBirthdate($birthdate){
			$this->birthdate = $birthdate;
		}

		public function getGender(){
			return $this->gender;
		}

		public function setGender($gender){
			$this->gender = $gender;
		}

		public function getContact_no(){
			return $this->contact_no;
		}

		public function setContact_no($contact_no){
			$this->contact_no = $contact_no;
		}	

	}
?>