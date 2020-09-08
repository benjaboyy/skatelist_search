<?php
	$nameErr = $emailErr = $subjectErr = "";
	$name = $company = $phone = $email = $subject = $comment = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Naam is verplicht";
		}	
		else {
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "Alleen letters en spaties toegestaan"; 
			}
		}

		if (empty($_POST["company"])) {
			$company = "";
		}
		else {
			$company = test_input($_POST["company"]);
		}

		if (empty($_POST["phone"])) {
			$phone = "";
		}
		else {
			$phone = test_input($_POST["phone"]);
		}

		if (empty($_POST["email"])) {
			$emailErr = "E-mail is verplicht";
		}
		else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "E-mail niet correct ingevuld";
			}
		}
		
		if (empty($_POST["subject"])) {
			$subjectErr = "Onderwerp is verplicht";
		}
		else {
			$subject = test_input($_POST["subject"]);
		}

		if (empty($_POST["comment"])) {
			$comment = "";
		}
		else {
			$comment = test_input($_POST["comment"]);
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>