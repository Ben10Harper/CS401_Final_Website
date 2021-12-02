<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Ben's Basic Blog</title>
</head>


<body>  

  <div class="navbar">
    <a href="index.php">Home</a>
    <a href="newpostform.php">Create Post</a>
    <a href="about.php">About</a>
  </div>

  <?php
    $title = $_GET['title'];
    $body = $_GET['body'];
    $file = $_GET['postfile']
  ?>

  <br>
  <form action="editpost.php" method = "get">
    <label for="posttitle">Post Title:</label><br>
    <input class='edit-title' type="text" id="posttitle" name="posttitle" autocomplete="off" value="<?php echo $title; ?>"><br><br>
    <label for="postbody">Post Body:</label><br>
    <textarea class='edit-body' id="postbody" name="postbody"><?php echo $body; ?></textarea><br><br>
    <input type='text' class='file-name' id='postfile' name='postfile' value='<?php echo $file; ?>' readonly><br>
    <input type="submit" name="submitButton" class="submitButton" value="Submit edits!"/>
  </form>

</body>
  <script src="js/main.js"></script>
</html>