<?php
include("./../../Database/config.php");


$delete = "DELETE FROM `car` WHERE id=". $_GET['id'];

$delete_result = mysqli_query($con, $delete);
header("Location: index.php");
echo $delete;

?>