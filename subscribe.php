<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Subscribe to Newsletter</title>
		<link rel="shortcut icon" href="email-logo-png-1119.png" type="image/x-icon" />
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<main>
			<section>
				<h1>Thank you for Subscribing.</h1> <!-- Corrected closing tag for h1 -->
				<?php
				$emailAddress = $_GET['emailAddress']; // Corrected variable name
				echo("Your email address, $emailAddress, has been added to our list of subscribers."); // Added semicolon at the end
				?>
			</section>
		</main>    
		
	</body>
</html>
