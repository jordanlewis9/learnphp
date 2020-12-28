<?php 
  session_start();
  if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="session1.php" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit">
  </form>
</body>
</html>