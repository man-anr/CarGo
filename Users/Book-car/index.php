<?php
include("./../../template/nav-bar.php");

?>
 
<main class="m-2 my-5 py-3">

<div class="card my-2 shadow-sm" style="max-width: 28rem;">
    <h5 class="card-header">Let's Book One</h5>
    <img src="./../../res/car.jpg" class="card-img-top" alt="https://dummyimage.com/640x360/d1d1d1/">
    <div class="card-body">
        <h5 class="card-title position-relative">Myvi<div class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-check2-circle text-success"></i></div></>
        <div class="my-2">
            <span class=" badge bg-warning border border-dark text-dark">Produa</span>
            <span class=" badge bg-primary border border-secondary">Hatchback</span>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rate: <span class="badge rounded-pill bg-info text-dark">RM 7/hr</span></li>
            <li class="list-group-item">Mileage: <span class="badge rounded-pill bg-success text-light">100,000km</span></li>
            <li class="list-group-item">Color: <span class="badge rounded-pill bg-light border border-dark text-dark">red</span></li>
        </ul>
        
        
    </div>
    <div class="d-grid mb-3 mx-3">
        <a href="./../Book-car/booking.php" class="btn btn-primary">Book Now</a>
    </div>
</div>
</main>