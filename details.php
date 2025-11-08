<?php
// Connect to db
require_once "db_connect.php";
// Call the primary-key to get the right media
$mediaID = $_GET['ISBN'];
// Query to call the right media
$sql="SELECT * FROM `media` WHERE ISBN = '$mediaID'";
$result = mysqli_query($connect, $sql);
// Create layout-variable
$layout = "";
// If the data exists:
if(mysqli_num_rows($result)>0){
  $row=mysqli_fetch_assoc($result);
// Create the card with Link to publisher.php
  $layout = "
    <div class='card'>
      <img src='{$row["image"]}' class='card-img-top big' alt='{$row["title"]}'>
      <div class='card-body'>
        <h5 class='card-title'>{$row["title"]}</h5>
        <p class='card-text'>{$row["availability"]}</p>
        <p class='card-text'>{$row["ISBN"]}</p>
        <p class='card-text'>{$row["type"]}</p>
        <p class='card-text'>{$row["author_first_name"]} {$row["author_last_name"]}</p>
        <p class='card-text'>{$row["description"]}</p>
        <p class='card-text'>{$row["publish_date"]}</p>
        <p class='card-text'><a href='publisher.php?publisher_name={$row["publisher_name"]}'>{$row["publisher_name"]}</a></p>
        <p class='card-text'>{$row["publisher_address"]}</p>
      </div>
    </div>";
}else{
  // If no matching media found:
  $layout = "<h3>No product found with ID $productId</h3>";
}
?>
<!-- HTML to show info to the user -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Add bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Add my CSS -->
   <link rel="stylesheet" href="style.css">
  <title>Big Library Details</title>
</head>
<body>
  <!-- Conatiner with back to index.php-button -->
  <div class="container">
    <a href='index.php' class='btn btn-warning back'>Back</a>
    <div class="row mx-auto">
      <?= $layout; ?>
    </div>
  </div>
</body>
</html>
