<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="email-logo-png-1119.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="php" href="subscribe.php">
    <title>Email Subscription Form</title>
</head>
<body>
    <form action="subscribe.php" method="get">
        <h1>Subscribe to Newsletter</h1>
        <label for="emailAddress">Email Address:</label>
        <label value="id" id="emailaddress"></label>
         <input name="email" type="email" id="emailaddress" required>
            <button type="submit">Subscribe</button>
       </form>
       <footer>
        <p>@e-Mail Subscription Inc.</p>
    </footer>
       
</body>
</html>
