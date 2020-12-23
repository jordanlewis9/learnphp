<?php
include "db.php";

function showAllData() {
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);
  
  if(!$result) {
    die('Query FAILED!');
  }
  
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function updateTable() {
  global $connection;
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
  
    $query = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
  
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query failed!' . mysqli_error($connection));
    } else {
      echo "Record successfully updated";
    }
  }
}

function deleteRows() {
  global $connection;
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
  
    $query = "DELETE FROM users WHERE id=$id";
  
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Query failed " . mysqli_error($connection));
    } else {
      echo "Record successfully deleted";
    }
  }
}

function createRows() {
  global $connection;
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$username || !$password) {
      die("Please enter a username and password");
    }
    
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result){
      die("Query failed " . mysqli_error($connection));
    } else {
      echo "Record successfully created";
    }
  }
}

function readData() {
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Query FAILED!');
  }
  while($row = mysqli_fetch_assoc($result)){
    echo "<pre>" . print_r($row) . "</pre>";
  }
}

function formTemplate($type) {
  $data = showAllData();
  echo '<div class="container">
  <div class="col-xs-6">
  <h1 class="text-center">' . ucfirst($type) . '</h1>
  <form action="login_' . $type . '.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="form-group">
        <select name="id">' . $data . '</select>
      </div>
      <input type="submit" name="submit" value="' . ucfirst($type) . '" class="btn btn-primary">
    </form>
  </div>';
}

?>