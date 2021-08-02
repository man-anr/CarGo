 <?php
 include("./../../template/nav-employee.php");

 include_once("./../../Database/config.php");

$books = "UPDATE `car` SET `availability` = 'not-booked' WHERE car.id = 1";
$book_result = mysqli_query($con, $books);


 ?>
 
 <main class="m-2 mb-5 py-3">



    
<h1 class="mt-4 pt-4">Delivered Cars</h1>
       

<div class="card my-2 shadow-sm" style="max-width: 28rem;">
    <img src="./../../res/car.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title position-relative">Myvi<div class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-check2-circle text-success"></i></div></>
        <div class="my-2">
            <span class=" badge bg-warning border border-dark text-dark">Produa</span>
            <span class=" badge bg-primary border border-secondary">Hatchback</span>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rate: <span class="badge rounded-pill bg-info text-dark">RM 7/hr</span></li>
            <li class="list-group-item">Mileage: <span class="badge rounded-pill bg-success text-light">200000km</span></li>
            <li class="list-group-item">Color: <span class="badge rounded-pill bg-light border border-dark text-dark">Red</span></li>
            <li class="list-group-item"><h6 class="card-text">Location: No 20, Old Street, Batu Pahat, Johor</h6></li>
            <li class="list-group-item">Date: 1 July 2021 - 1 July 2021</li>
            <li class="list-group-item">Time: 8:00am - 8.00pm</li>
            <li class="list-group-item">Fee: 84</li>
            <li class="list-group-item">Payment: Card <span class="badge bg-success ms-auto">Paid</span></li>
            <li class="list-group-item">Receipt Reference:<a href=""> #0000123DSS</a></li>
        </ul>
        
        
    </div>
    <div class="d-grid mb-3 mx-3">
        <button type="button" href="./../../Admin/Manage-booking/delivered.php" class="btn btn-primary" disabled>Delivered</button>
    </div>
</div>

</main>