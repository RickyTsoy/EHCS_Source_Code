<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Training Platform Home</title>
    <link rel="stylesheet" href="style.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>
    <header>
        <h1>Welcome to Web Security Training Platform</h1>
        <nav>
            <ul>
                <li><a href="index2.php">File Upload Lab Environment</a></li>
            </ul>
        </nav>
    </header>
    <h2>Stored XSS Test 1</h2>
<div align="left">
   <form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"> <input type="submit" name="submit" value="Submit"></p>

</form>
</div>
<?php

if (isset($_GET["username"])) {
    // Echo back the username input
    echo("Your name is " . $_GET["username"]);

    // Check if the username input demonstrates a successful XSS attack
    // For demonstration purposes, let's assume a successful attack is when the username contains a specific string
    // You should replace this condition with the actual logic or pattern that indicates a successful XSS attack
    if (strpos($_GET["username"], "<script>") !== false) {
        // Set the cookie only if the XSS attack is successful
        setrawcookie("Flag", "XSS_Demonstrated_2024");
    }
}

?>
	
    <footer>
        <p>&copy; 2024 Training Platform. All rights reserved.</p>
    </footer>
</body>
</html>
