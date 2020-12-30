<?php
function e() {
  echo "<br>";
}
  class Car {
    static $wheels = 4;
    public $hood = 1;


    function MoveWheels(){
      self::$wheels = 10;
  }
}

  $bmw = new Car();

  // does not work
  // echo $bmw->wheels;
  echo Car::$wheels;
  e();
  $bmw->MoveWheels();
  e();
  echo Car::$wheels;
  e();
  Car::$wheels = 12;
  echo Car::$wheels;

  // class Plane extends Car {

  // }

  // $jet = new Plane();
  // $jet->MoveWheels();
  // echo $jet->wheels;

  // if(method_exists("Car", "MoveWheels")) {
  //   echo "Method exists";
  // } else {
  //   echo "Doesn't exist";
  // }

  // if(class_exists("Car")){
  //   echo "Class exists";
  // } else {
  //   echo "Doesn't exist";
  // }

?>