<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- Favicons -->
    <link href="/img/image2.jpeg" rel="icon" />
    <title>Book Sharing</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <header>
      <div class="container">
        <div id="branding">
          <h1 style="font-family: 'Brush Script MT', cursive; font-size: 34px">
            Book Sharing
          </h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="share.php">Share</a></li>
          </ul>
        </nav>
      </div>
    </header>
      <h1>Share Your Favorite Book</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Book Name" required></br>
        <input type="text" name="author" placeholder="Author" required></br>
        <input type="text" name="published" placeholder="Published Year" required></br>
        <input type="file" name="bookImage" required></br>
        <input type="submit" name="submit" value="Upload Book">
    </form>
<?php
if (isset($_POST["submit"])) {
    $target_dir = "/var/www/html/lab/upload_books/"; // Ensure this directory exists and is writable
    $target_file = $target_dir . basename($_FILES["bookImage"]["name"]);

    // Check if file upload is successful
    if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target_file)) {
        // Sending file path in response header
        header('X-File-Path: ' . $target_file);
        echo "The file has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
    <footer>
      <p>Book Sharing Platform, Copyright &copy; 2024</p>
    </footer>
  </body>
</html>
