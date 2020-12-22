<?php
  if(isset($_POST['submit'])){
    $name = ["Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom"];
    $min = 5;
    $max = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($username) < $min){
      echo "Username has to be longer than five characters";
    }
    if(strlen($username) > $max){
      echo "Username has to be shorter than ten characters";
    }
    if(!in_array($username, $name)){
      echo "Sorry, you cannot log in";
    } else {
      echo "Welcome";
    }
    // to prevent refreshing resubmitting the form
    // header("Location: forms.php"); exit;
  }
?>