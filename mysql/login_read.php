<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if($connection) {
  echo "We are connected!";
} else {
  die("Database connection failed");
}

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result) {
  die('Query FAILED!');
}



?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="col-xs-6">
      <?php
        while($row = mysqli_fetch_assoc($result)){
          ?>
          <pre>
          <?php 
          print_r($row);
          ?>
          </pre>
          <?php
        }
      ?>
    </div>
  </div>
</body>
</html>