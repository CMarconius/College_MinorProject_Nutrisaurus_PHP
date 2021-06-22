/**********************************************************
* Author: Mark Thomas
* Assignment: WE4.0 PHP HTML site Build and associated Backend Code, Digital Skills Academy
* Student ID: D15126861 
* Date : 2016/04/26
* Ref:  	The following are the main websites that I used to find information :
			https://www.udemy.com/	http://stackoverflow.com/	http://www.w3schools.com/	http://php.net/
***********************************************************/

//Contains Functions to deal with button presses.
// Subscribe for newsletter button
	function subscribeForNewsletter() {
		userEmail = document.getElementById("subscriptionEmail").value;
		if (userEmail != "" && validateEmail(userEmail)) {
			document.getElementById("newsletter-Signup-Error").style = "display: none";
			document.getElementById('subscribeForm').submit();
		}
		else  {
			document.getElementById("newsletter-Signup-Error").style="display: inline-block";
			return false;
		}
	}


// Makes sure each textbox contains valid data before proceeding to add it to the database
	function contactUs() {
		userName = document.getElementById("contactName").value;	
		userEmail = document.getElementById("contactEmail").value;	
		userMessage = document.getElementById("contactMessage").value;
		
		if (userName != "" && userMessage != "" && validateEmail(userEmail)) {
			alert("Your message has been sent, We'll get back to you as soon as possible, Thank you.");
		// Submits the contact form because at the data at this point is valid //
			document.getElementById('userContactForm').submit();
		} 
		else document.getElementById("contactError").style="display: inline-block";
	}



// Checks if the email provided is a valid email //
	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}