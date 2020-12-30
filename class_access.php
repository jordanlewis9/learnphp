<?php
function e() {
  echo "<br>";
}
  class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = "engine";
    var $doors = 4;

    private function showProperty($prop){
      echo $this->$prop;
    }

    public function passProperty($prop){
      return $this->showProperty($prop);
    }
  }

  $bmw = new Car();

  echo $bmw->wheels;
  e();
  echo $bmw->passProperty("engine");
  e();

  class Semi extends Car {

  }

  $truck = new Semi();
  // works, shows hood, hood is protected
  echo $truck->passProperty("hood");
  e();
  // doesn't work, engine is private
  echo $truck->passProperty("engine");

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