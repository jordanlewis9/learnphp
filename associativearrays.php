<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $number = array(10, 20, 45);

  echo $number[2] . "<br>";

  $names = array("first_name" => 'Jordan', "last_name" => 'Lewis');
  print_r($number);
  print_r($names);
  echo $names['first_name'] . " " . $names['last_name'];
  ?>
</body>
</html>