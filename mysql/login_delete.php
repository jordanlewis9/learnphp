<?php
include "db.php";
include "functions.php";
// $idquery = "SELECT id FROM users";
// $idresult = mysqli_query($connection, $idquery);
// while($id = mysqli_fetch_assoc($idresult)){
//   echo $id['id'];
// }
deleteRows();


?>
<?php include "includes/header.php"; ?>
<?php formTemplate('delete'); ?>
<?php include "includes/footer.php"; ?>