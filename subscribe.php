<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Mail Subscription Form</title>
		<link rel="shortcut icon" href="email-logo-png-1119.png" type="image/x-icon">  <!-- Specify shortcut icon for the website -->
		<link rel="stylesheet" href="styles.css">  <!-- Include external CSS file -->
	</head>
	<body>
		
		<main>
		
		<header>Subscribe To Newsletter</header><!-- Display header for the subscription form -->

<?php


$userEmail = "";// Initialize variable to store user email
$emailAddress = "";// Initialize variable to store email address
$subject = "";// Initialize variable to store email subject
$message = ""; // Initialize variable to store email message


if (isset($_POST["subscribe"])) {// Check if the form has been submitted
    $userEmail = $_POST["email"];// Get the email address entered by the user
    $emailAddress = $userEmail; // Store the email address in a separate variable
    $subject = "Thank You for Subscribing";// Set the subject of the email
    $message = "Thank You for Subscribing";// Set the message of the email
    
}

echo "<p>Your email address, " . $emailAddress . ", has been added to our list of subscribers.</p>";// Display a message indicating the email address that has been added to the list of subscribers

?>
</main>
		
		<footer>
			<p><small>© E-Mail Subscription</small></p><!-- Display footer information -->
		</footer>
	</body>
</html>
