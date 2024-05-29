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
                <li><a href="index.php">Cross-Site Scripting Lab Environment</a></li>
            </ul>
        </nav>
    </header>

<div align="center">
<form action="" method="post" enctype="multipart/form-data">
   <br>
    <b>Select file : </b> 
    <input type="file" name="file" id="file" style="border: solid;">
    <input type="submit" value="Submit" name="submit">
</form>
</div>
<?php

if(isset($_POST["submit"])) {
    $target_dir = "/var/www/html/lab/uploads/"; // Ensure this is the correct absolute path
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Check if file upload is successful
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "File has been uploaded: " . $target_file;
    } else {
        echo "Error uploading file.";
    }
}
?>
    <footer>
        <p>&copy; 2024 Training Platform. All rights reserved.</p>
    </footer>
</body>
</html>
</body>
</html>
