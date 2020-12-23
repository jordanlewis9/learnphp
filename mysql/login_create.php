<?php
include "db.php";
include "functions.php";

createRows();
?>
<?php include "includes/header.php"; ?>



  <div class="container">
    <div class="col-xs-6">
    <h1 class="text-center">Create</h1>
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
<?php include "includes/footer.php"; ?>