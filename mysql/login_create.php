<?php
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  // if($username && $password) {
  //   echo $username . "<br>" . $password;
  // } else {
  //   echo "Please enter a username and a password";
  // }
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if($connection) {
    echo "We are connected";
  } else {
    die("Database connection failed");
  }


  $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die('QUERY FAILED!' . mysqli_error());
  }

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
      <form action="login_create.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>
</html>