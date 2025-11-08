<?php
// Call the connect to the database
  require_once "db_connect.php";
  // Select everything from the folder in the database
  $sql = "SELECT * FROM media";
  $result = mysqli_query($connect, $sql);
  // Create the layout-variable
  $layout = "";
  // If there is data in the table, create a card
  if(mysqli_num_rows($result)>0){
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($rows as $row){
      $layout .= "
      <div>
        <div class='card my-3 small'>
          <img src='{$row["image"]}' class='card-img-top' alt='{$row["title"]}'>
          <div class='card-body'>
            <h5 class='card-title'>{$row["title"]}</h5>
            <a href='details.php?ISBN={$row["ISBN"]}' class='btn btn-primary'>Details</a>
            <a href='delete.php?ISBN={$row["ISBN"]}' class='btn btn-danger'>Delete</a>
          </div>
        </div>
      </div>
      ";
      // Including link to details.php and delete.php for each media-entry
    }
  }else{
    // If not, give this message
    $layout = "<h3>There is no media in the Database.</h3>";
  }
?>
<!-- HTML to show the info to the user -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Insert Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Insert CSS -->
   <link rel="stylesheet" href="style.css">
  <title>Big Library</title>
</head>
<body>
  <!-- Create a container with the headings and cards -->
  <div class="container">
    <h1>Wellcome to Big Library</h1>
    <br>
    <h2>Our Media</h2>
    <!-- Link to the create.php-site -->
    <a href="create.php" class="btn btn-success my-3">Add new media</a>
    <!-- Search for author (first/last/both name/s) -->
    <form action="author.php" method="get">
      <label for="author" class="my-3 mx-3">Search for Author:</label>
      <input type="text" name="author" id="author">
      <input type="submit" value="Search" class="my-3 mx-3">
    </form>
    <!-- Search for title -->
    <form action="title.php" method="get">
      <label for="title" class="mx-3">Search for Title: </label>
      <input type="text" name="title" id="title" class="searchTitle">
      <input type="submit" value="Search" class="my-3 mx-3">
    </form>
    <!-- Display the media-cards -->
    <div class="card-container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <?= $layout; ?>
      </div>
    </div>
  </div>
</body>
</html>
