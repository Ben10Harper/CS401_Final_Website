<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Ben's Basic Blog</title>
</head>


<body>  

  <div class="navbar">
    <a class = "active" href="index.php">Home</a>
    <a href="newpost.php">Create Post</a>
    <a href="editpost.php">Edit a Post</a>
    <a href="about.php">About</a>
  </div>

  <h1>Welcome to Ben's Basic Blog!</h1>
  <h2>Here you can see all the latest posts!</h2>
  <img src="img/thedude.jpg" alt="The dude">
  <?php include("example.php"); ?>
  <button type="button" onclick="helloJS()">Click Me!</button>
  
</body>
  <script src="js/main.js"></script>
</html>