<?php
  if(isset($_POST['submit'])){
    echo $_POST['name'];
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
  <form action="post.php" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="submit" name="submit">
  </form>
</body>
</html>