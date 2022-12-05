<?php

# set up connection to database
$connection = mysqli_connect("localhost", "root", "", "practical_app_7");

if (!$connection) {
  die("Connection to database failed.");
}

function showAll()
{
  global $connection;

  $query = "SELECT * FROM books";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query failed");
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
?>
    <pre><?php print_r($row); ?></pre>
    <form action="7.php" method="post">
      <input type="hidden" name="method" value="delete">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <div class="mb-3">
        <input type="submit" name="submit" class="btn btn-danger" value="Delete">
      </div>
    </form>
<?php
  }
}

function createRecord()
{
  if (isset($_POST["submit"]) && $_POST["method"] == "post") {
    $author = $_POST["author"];
    $title = $_POST["title"];

    global $connection;

    $query = "INSERT INTO books(author,title) ";
    $query .= "VALUES('$author','$title')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed");
    } else {
      echo "Record created successfully";
    }
  }
}

function deleteRecord()
{
  if (isset($_POST["submit"]) && $_POST["method"] == "delete") {
    $id = $_POST["id"];

    global $connection;

    $query = "DELETE FROM books WHERE id='$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed");
    } else {
      echo "Record deleted successfully";
    }
  }
}

?>

<?php createRecord(); ?>
<?php deleteRecord(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <div class="row justify-content-between g-2 pt-3">
      <div class="col-7">
        <div class="container">
          <h2 class="mb-3">Add New Book</h2>
          <form action="7.php" method="POST">
            <div class="mb-3 row">
              <label for="author" class="col-4 col-form-label">Author</label>
              <div class="col-8">
                <input type="text" class="form-control" name="author" id="auhtor" placeholder="Enter the Author's name">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="title" class="col-4 col-form-label">Title</label>
              <div class="col-8">
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter the title of the book">
              </div>
            </div>
            <input type="hidden" name="method" value="post">
            <div class="mb-3 row">
              <div class="offset-sm-4 col-sm-8">
                <input type="submit" name="submit" class="btn btn-primary" value="Add Book">
              </div>
            </div>


          </form>
        </div>
      </div>
      <div class="col-4">
        <h2 class="mb-3">Library</h2>
        <?php showAll() ?>
      </div>
    </div>
  </div>

</body>

</html>