<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  // function say_Something(){
  //   echo "Hello Student, do you like the class?";
  // }

  // function calculate(){
  //   echo 456 + 345;
  // }

  // function init() {
  //   calculate();
  //   echo "<br>";
  //   say_Something();
  // }

  // init();

// passing params


  // function greeting($message){
  //   echo $message;
  // }

  // greeting("Hello student");

  // function calculate($number1, $number2){
  //   $sum = $number1 + $number2;

  //   echo $sum;
  // }

  // calculate(48, 52);

  // Returning values

  // function addNumbers($number1, $number2){
  //   $sum = $number1 + $number2;

  //   return $sum;
  // }

  // $result = addNumbers(33, 40);

  // $result = addNumbers(100, $result);

  // echo $result;

  // math functions

  function e(){
    echo "<br>";
  }

  // echo pow(2, 7);
  // e();
  // echo rand(1, 100);
  // e();
  // echo sqrt(100);
  // e();
  // echo ceil(4.6);
  // e();
  // echo floor(4.6);
  // e();
  // echo round(4.4);
  // e();
  // echo round(4.6);

  // string functions
  // $string = "Hello student do you like the class?";
  // echo strlen($string);
  // e();
  // echo strtoupper($string);
  // e();
  // echo strtolower($string);

  // array functions
  $list = [343, 34, 323, 54];
  echo max($list);
  e();
  echo min($list);
  e();
  print_r($list);
  e();
  echo sort($list);
  e();
  print_r($list);
  e();

  ?>
</body>
</html>