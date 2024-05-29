<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="/img/image2.jpeg" rel="icon" />
    <title>Book Sharing</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Book Sharing</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="share.php">Share</a></li>
                </ul>
            </nav>
        </div>
    </header>

<section class="recommendation-section">
    <div class="recommendation-image">
        <img src="/img/image8.jpeg" alt="Book Image">
                <a class="recommendation-link" href="https://jamesclear.com/five-step-creative-process" target="_blank">Read The Book</a>
    </div>
    <div class="recommendation-text">
        <p>
Name: For a More Creative Brain Follow These 5 Steps</br>
Author: JAMES CLEAR</br>
Published Year: 2016</br>

        </p>
        
    </div>
</section>
<hr>

<section>
<h2 style="text-align: left;">
You can write a comment after you read the book
</h2>
<div align="left">
   <form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></br>
   What do you feel on this book: <input type="text" name="feel"></br>
   <input type="submit" name="submit" value="Submit"></p>

</form>
	</div>
<?php

if (isset($_GET["username"])) {
    $username = htmlspecialchars($_GET["username"], ENT_QUOTES, 'UTF-8');
    echo "Your name is " . $username . "<br>";
}

if (isset($_GET["feel"])) {
    // Assuming that the XSS vulnerability is intended to be demonstrated via the 'feel' parameter
    $feel = $_GET["feel"];
    echo "The feeling on this book: " . $feel;

    // Check if the 'feel' parameter contains a successful XSS attack pattern
    // This is just an example condition; you should replace it with the actual logic or pattern that indicates a successful XSS attack
    if (strpos($feel, "<script>") !== false) {
        // Set the cookie only if the XSS attack is successfully demonstrated
        setrawcookie("Flag", "R4nd0m_T3xt_Str1ng_G3nerat3d");
    }
}

?>
	
    <footer>
        <p>Book Sharing Platform, Copyright &copy; 2024</p>
    </footer>
</body>
</html>

