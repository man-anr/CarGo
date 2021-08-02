<?php
include("./../../template/nav-bar.php");
include("./../../Database/config.php");



// echo "<br>" . $region;

$find_car = "
SELECT * FROM location
INNER JOIN car
ON location.id = car.location_id
WHERE car.model = 'Myvi' AND availability = 'not-booked'";
// echo $find_car;

$query_find_car = mysqli_query($con, $find_car);


?>
 
 <div class="m-2 my-5 py-3">

 <h4>Your previous orders</h4>



     
<?php

if($query_find_car){
    while($row_find_car = mysqli_fetch_array($query_find_car)){

        ?>
        

        <div class="card shadow-sm my-2" style="max-width: 28rem;">
            <img src="./../../res/car.jpg" class="card-img-top" alt="https://dummyimage.com/640x360/d1d1d1/">
            <div class="card-body">
                <h5 class="card-title position-relative"><?php echo $row_find_car['model'];?><div class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-check2-circle text-success"></i></div></h5>
                <div class="my-2">
                    <span class=" badge bg-warning border border-dark text-dark"><?php echo $row_find_car['brand'];?></span>
                    <span class=" badge bg-primary border border-secondary"><?php echo $row_find_car['type'];?></span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rate: <span class="badge rounded-pill bg-info text-dark">RM <?php echo $row_find_car['rate'];?>/hr</span></li>
                    <li class="list-group-item">Mileage: <span class="badge rounded-pill bg-success text-light"><?php echo $row_find_car['mileage'];?>km</span></li>
                    <li class="list-group-item">Color: <span class="badge rounded-pill bg-light border border-dark text-dark"><?php echo $row_find_car['color'];?></span></li>
                    <li class="list-group-item">Date: 1 July 2021 - 1 July 2021</li>
                    <li class="list-group-item">Time: 8:00am - 8.00pm</li>
                    <li class="list-group-item">Fee: 84</li>
                    <li class="list-group-item">Payment: Card</li>
                    <li class="list-group-item">Receipt Reference:<a href=""> #0000123DSS</a></li>
                    


                </ul>
            </div>
        </div>
        
        
        
        <?php
    }
} else {
    echo "<br>" . "can't find car";
}


?>
    


    

       

     
    </div>