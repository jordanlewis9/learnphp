<?php
include "db.php";
include "functions.php";
// $idquery = "SELECT id FROM users";
// $idresult = mysqli_query($connection, $idquery);
// while($id = mysqli_fetch_assoc($idresult)){
//   echo $id['id'];
// }{
  updateTable();
?>



<?php include "includes/header.php"; ?>
<?php formTemplate('update'); ?>
<?php include "includes/footer.php"; ?>