<?php
// Connect to database
require_once "db_connect.php";
// Check if infos are filled in
if (isset($_POST['create_media'])){
  $ISBN = $_POST['ISBN'];
  $title = $_POST['title'];
  $image = $_POST['image'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $author_first_name = $_POST['author_first_name'];
  $author_last_name = $_POST['author_last_name'];
  $publisher_name = $_POST['publisher_name'];
  $publisher_address = $_POST['publisher_address'];
  $publish_date = $_POST['publish_date'];
  $availability = $_POST['availability'];
    // sql-query to get information into the db
  $sql="INSERT INTO `media`(`ISBN`, `title`, `image`, `description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `availability`) VALUES ('$ISBN','$title','$image','$description','$type','$author_first_name','$author_last_name','$publisher_name','$publisher_address','$publish_date', '$availability')";
//   When media was delivered to db successfully:
  $result = mysqli_query($connect, $sql);
  if($result){
    echo "<div class='alert alert-success'>
    New media has been added!
    </div>";
  }else{
    // When something went wrong:
    echo "<div class='alert alert-danger'>
    Something went wrong!
    </div>";}
    // After data was sent, return ti index.php after 3sec
header("refresh: 3; url=index.php");
}
?>
<!-- HTML to display to user -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- My CSS -->
     <link rel="stylesheet" href="style.css">
    <title>Big Library Add</title>
</head>
<body>
    <!-- Container for style-reasons -->
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <!-- heading and back to index.php-button -->
                <h2>Add Media</h2>
                <a href='index.php' class='btn btn-warning back'>Back</a>
            </div>
            <!-- Form to fill out to add new media to the db -->
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <!-- Primary Key -->
                    <label for="ISBN">ISBN or EAN:</label>
                    <input type="text" class="form-control" id="ISBN" name="ISBN">
                </div>
                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <!-- Image distributet as link (for easier transfer, less data-storage) -->
                    <label for="image">Image:</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <!-- Description as textarea field -->
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <!-- Type to select -->
                    <label for="type">Type:</label>
                    <select name="type" required>
                      <option value="">Select Type</option>
                      <option value="Book">Book</option>
                      <option value="CD">CD</option>
                      <option value="DVD">DVD</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="author_first_name">Author´s first name:</label>
                    <input type="text" class="form-control" id="author_first_name" name="author_first_name">
                </div>
                <div class="mb-3">
                    <label for="author_last_name">Author´s last name:</label>
                    <input type="text" class="form-control" id="author_last_name" name="author_last_name">
                </div>
                 <div class="mb-3">
                    <label for="publisher_name">Publisher name:</label>
                    <input type="text" class="form-control" id="publisher_name" name="publisher_name">
                </div>
                <div class="mb-3">
                    <label for="publisher_address">Publisher address:</label>
                    <input type="text" class="form-control" id="publisher_address" name="publisher_address">
                </div>
                <div class="mb-3">
                    <label for="publish_date">Publish date:</label>
                    <input type="date" class="form-control" id="publish_date" name="publish_date">
                </div>
                <div class="mb-3">
                    <!-- Status to select -->
                    <label for="availability">Status:</label>
                    <select name="availability" required>
                      <option value="">Select Status</option>
                      <option value="available">Available</option>
                      <option value="reserved">Reserved</option>
                    </select>
                </div>
                <!-- Submit-button to send data -->
                <input type="submit" class="btn btn-primary" name="create_media" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
