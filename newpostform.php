<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Ben's Basic Blog</title>
</head>


<body>  

  <div class="navbar">
    <a href="index.php">Home</a>
    <a class = "active" href="newpostform.php">Create Post</a>
    <a href="about.php">About</a>
  </div>

  <br>
  <form action="savepost.php" method = "get">
    <label for="posttitle">Post Title:</label><br>
    <input class='edit-title' type="text" id="posttitle" name="posttitle" autocomplete="off"><br><br>
    <label for="postbody">Post Body:</label><br>
    <textarea class='edit-body' id="postbody" name="postbody"></textarea><br><br>
    <input type="submit" name="submitButton" class="submitButton" value="Submit post!"/>
  </form>

</body>
  <script src="js/main.js"></script>
</html>