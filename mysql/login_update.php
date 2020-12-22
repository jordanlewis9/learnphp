<?php
include "db.php";
include "functions.php";

// $idquery = "SELECT id FROM users";
// $idresult = mysqli_query($connection, $idquery);
// while($id = mysqli_fetch_assoc($idresult)){
//   echo $id['id'];
// }



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
        <div class="form-group">
          <select name="id" id="">
          <?php
            showAllData();
          ?>
          </select>
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>
</html>