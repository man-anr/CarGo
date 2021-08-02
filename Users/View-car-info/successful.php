<?php
include("./../../template/nav-bar.php");

?>

<div class="container-fluid py-4 my-5">
    <div class="card shadow">
        <div class="card-img-top text-center border-dark" style="height: 10rem; background-color: #20c77c; ">
            <i class="bi bi-check2-circle" style="font-size: 7rem; color: white;"></i>
        </div>
        
        <div class="card-body text-center">
            <h2 class="card-title">Great!</h2>
            <p class="card-text">Car information has been updated. Keep posted for the next maintenance.</p>
        </div>

       
        <div class="d-grid mx-3 my-2">
            
            <button class="btn btn-outline-primary mb-2" onClick="location.href='./../View-car-info'">
                Back to home
            </button>
        </div>
    </div>
</div>