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
        <div class="main-container">
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
        <img src="/img/image6.jpeg" alt="Book Image">
        <a class="recommendation-link" href="https://www.juhsd.net/site/handlers/filedownload.ashx?moduleinstanceid=4480&dataid=7745&FileName=The-Fault-in-Our-Stars.pdf" target="_blank">Read The Book</a>
    </div>
    <div class="recommendation-text">
        <p>
Book Name: The Fault In Our Stars</br>
Author: John Green</br>
Published Year: 2012</br>
Pges: 207</br>
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
    $feel = htmlspecialchars($_GET["feel"], ENT_QUOTES, 'UTF-8');
    echo "The feeling on this book: " . $feel;
}
?>
	
	
</section>
    
    <footer>
        <p>Book Sharing Platform, Copyright &copy; 2024</p>
    </footer>
</body>
</html>

