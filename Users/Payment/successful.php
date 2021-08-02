<?php
include("./../../template/nav-bar.php");
include_once("./../../Database/config.php");

$books = "UPDATE `car` SET `availability` = 'booked' WHERE car.id = 1";
$book_result = mysqli_query($con, $books);

?>

<div class="container-fluid py-4 my-5">
    <div class="card shadow">
        <div class="card-img-top text-center border-dark" style="height: 10rem; background-color: #20c77c; ">
            <i class="bi bi-check2-circle" style="font-size: 7rem; color: white;"></i>
        </div>
        
        <div class="card-body text-center">
            <h2 class="card-title">Awesome!</h2>
            <p class="card-text">Your payment was successful. Our partners will deliver your car shortly.</p>
        </div>

        <div class="d-grid mx-3 my-1">
            <button class="btn btn-warning" onClick="location.href='./../Feedback'">
                Submit feedback
            </button>
           
        </div>
        <div class="d-grid mx-3 my-1">
            <button class="btn btn-primary" onClick="location.href='./../../Admin/Payment/receipt.php'">
               View Receipt
            </button>
           
        </div>
        <div class="d-grid mx-3 my-2">
            
            <button class="btn btn-outline-primary mb-2" onClick="location.href='./../View-car-info'">
                Back to home
            </button>
        </div>
    </div>
</div>