<?php
// Connect to db
require_once "db_connect.php";
// Get publisher-name from link
$publisherName = $_GET['publisher_name'];
// Query selector for publisher_name
$sql = "SELECT * FROM `media` WHERE publisher_name = '$publisherName'";
$result = mysqli_query($connect, $sql);
// Create layout variable
$layout = "";
// If matching data found:
if(mysqli_num_rows($result)>0){
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach ($rows as $row) {
    // Create cards with link to Details page
    $layout .= "
    <div>
    <div class='card my-3 small'>
      <img src='{$row['image']}'/>
      <h3>{$row['title']}</h3>
      Publisher: {$row['publisher_name']}
      <br>
      Address: {$row['publisher_address']}
      <a href='details.php?ISBN={$row["ISBN"]}' class='btn btn-primary'>Go to Book-Info</a>
    </div>
    </div>
    ";
  }
} else {
// If no matching media found:
  echo "No publisher with that name was found.";
}
?>
<!-- HTML to display info to users -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Add my CSS -->
   <link rel="stylesheet" href="style.css">
  <title>Big Library Publishers</title>
</head>
<body>
  <!-- Container with back to index.php-button -->
  <div class='container my-3'>
    <a href="index.php" class="btn btn-warning">Back</a>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <?= $layout ?>
    </div>
  </div>
</body>
</html>
