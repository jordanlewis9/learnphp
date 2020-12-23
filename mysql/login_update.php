<?php
include "db.php";
include "functions.php";
// $idquery = "SELECT id FROM users";
// $idresult = mysqli_query($connection, $idquery);
// while($id = mysqli_fetch_assoc($idresult)){
//   echo $id['id'];
// }{
  updateTable();
 include "includes/header.php"; 
 formTemplate('update'); 
 include "includes/footer.php"; 
 ?>