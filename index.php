<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Mail Subscription Form</title>
        <link rel="stylesheet" href="styles.css">
        <link src="shortcut icon" href="email-logo-png-1119.png">
    </head>
    <body>
        <div>
        <header>Subscribe To Newsletter</header>
    </div>
    <form action="index.php" method="POST">

        <?php
        $userEmail = "";
        if (isset($_POST["subscribe"])) {
            $userEmail = $_POST["email"]; // Fix: Use square brackets instead of curly braces for accessing POST data
            $subject = "Thank You for Subscribing"; // Moved the variable assignment outside the echo statement
            $message = "Thank You for Subscribing"; // Moved the variable assignment outside the echo statement
            // Code for sending the email goes here
        }
        ?>

        <div class="field">
            <input type="text" placeholder="Email Address" required>
 </div>
        <div class="field BUTTON">
            <input type="submit" name="subscribe" value="Subscribe">
         </div>
              
    </form>

    </body>
</html>
