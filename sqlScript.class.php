<?php
/**********************************************************
* Author: Mark Thomas
* Assignment: WE4.0 PHP HTML site Build and associated Backend Code, Digital Skills Academy
* Student ID: D15126861 
* Date : 2016/04/26
* Ref:  	The following are the main websites that I used to find information :
			https://www.udemy.com/	http://stackoverflow.com/	http://www.w3schools.com/	http://php.net/
***********************************************************/
	class sqlScript {
		
		public $query;
		public $myConnection;
		
	// Default Constructor Function //
		public function __construct() {
			//establish the connection
			$this->myConnection = mysqli_connect("localhost", "root", "", "ns_site_db");			
		}
		
	// Checks if the email provided is already subscribed and adds it to the database if not //
		public function addNewSubscriber($email) {
			if ($this->checkIfEmailTaken($email) == "NotFound") {
				$this->query = "INSERT INTO `newsletter_subscribers` (`id`, `Email`) VALUES (NULL, '".$email."');";
				$this->myConnection->query($this->query);
			}
		}		
	// Scans the database for the email provided //
		public function checkIfEmailTaken($email) {
			$query = "SELECT Email FROM newsletter_subscribers";
			$result = $this->myConnection->query($query);
			while ($row = mysqli_fetch_array($result)) {
				if ($row["Email"] == $email) {
					
					Return "UserFound";
				}
			}
			Return "NotFound";			
		}
		
		
		
		
	// Ensures that the message details provided are unique and then adds it to the database //
		public function addNewMessage($name, $email, $message) {
			if ($this->checkIfMessageExists($name, $email, $message) == "NotFound") {
				$this->query = "INSERT INTO `user_Messages` (`id`, `Name`, `Email`, `Message`) VALUES (NULL, '".$name."', '".$email."', '".$message."');";
				$this->myConnection->query($this->query);
			}
		}
		
	// Checks if the message details provided are already in the database //
		public function checkIfMessageExists($name, $email, $message) {
			$query = "SELECT Name, Email, Message FROM user_Messages";
			$result = $this->myConnection->query($query);
			while ($row = mysqli_fetch_array($result)) {				
				if ($row["Name"] == $name && $row["Email"] == $email && $row["Message"] == $message ) {
					Return "UserFound";
				}
			}
			Return "NotFound";			
		}
		
		
		
		
		
		
	}
		
	
?>