<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Ben's Basic Blog</title>
</head>


<body>  

  <div class="navbar">
    <a class = "active" href="index.php">Home</a>
    <a href="newpostform.php">Create Post</a>
    <a href="about.php">About</a>
  </div>

  <h1>Welcome to Ben's Basic Blog!</h1>
  <h2>Here you can see all the latest posts!</h2>
  <?php include("loadposts.php"); ?>
  
</body>
  <script src="js/main.js"></script>
</html>