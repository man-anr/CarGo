<?php
include("./../../Database/config.php");


$add = "INSERT INTO car (`id`, `plate_no`, `model`, `type`, `brand`, `rate`, `mileage`, `color`, `location_id`, `availability`) 
              VALUES (NULL, '".$_POST['plate_no']."', '".$_POST['model']."', '".$_POST['type']."', '".$_POST['brand']."', '".$_POST['rate']."', '".$_POST['mileage']."', '".$_POST['color']."', '1', 'not-booked')";

$add_result = mysqli_query($con, $add);
header("Location: index.php");
echo $add;

?>