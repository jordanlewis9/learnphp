<?php
function e() {
  echo "<br>";
}
  class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){
      $this->wheels += 4;
    }

    function CreateDoors(){
      $this->doors += 2;
    }
  }

  $bmw = new Car();
  echo $bmw->wheels;
  e();
  echo $bmw->doors;
  e();
  $truck = new Car();
  $truck->MoveWheels();
  echo $truck->wheels;
  e();
  $truck->MoveWheels();
  echo $truck->wheels;
  e();
  $truck->CreateDoors();
  echo $truck->doors;

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