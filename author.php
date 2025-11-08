<?php
// Connect to db
require_once "db_connect.php";
// Get the info from the search
$author = $_GET['author'];
// Query-selector to search for first/last/both name/s
$sql = "SELECT * FROM `media`
WHERE author_first_name LIKE '%$author%'
   OR author_last_name LIKE '%$author%'
   OR CONCAT(author_first_name, ' ', author_last_name) LIKE '%$author%'
   OR CONCAT(author_last_name, ' ', author_first_name) LIKE '%$author%'";

$result = mysqli_query($connect, $sql);
// Create layout-variable
$layout = "";
// create cards for media with matching results
if(mysqli_num_rows($result)>0){
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach ($rows as $row) {
    $layout .= "
    <div>
    <div class='card my-3 small'>
      <img src='{$row['image']}'/>
      <h3>{$row['title']}</h3>
      <p>Author: {$row['author_first_name']} {$row['author_last_name']}</p>
      <a href='details.php?ISBN={$row["ISBN"]}' class='btn btn-primary'>Go to Book-Info</a>
    </div>
    </div>
    ";
    // Includes button linking to details.php
  }
} else {
// If no media is found with matching results:
  echo "No media-item with this author was found.";
}
?>
<!-- HTML to display results to users: -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Add my CSS -->
   <link rel="stylesheet" href="style.css">
  <title>Big Library Author<Title></Title></title>
</head>
<body>
  <!-- Create container to hold the cards -->
  <div class='container my-3'>
    <!-- Button to link back to index.html -->
    <a href="index.php" class="btn btn-warning">Back</a>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <?= $layout ?>
    </div>
  </div>
</body>
</html>
