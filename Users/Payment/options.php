<?php
include("./../../template/nav-bar.php");

?>

<div class="container-fluid py-4 my-5">
    <div class="card shadow">
        <div class="card-img-top text-center border-dark" style="height: 10rem; background-color: #1074e6; ">
            <i class="bi bi-wallet-fill" style="font-size: 7rem; color: white;"></i>
        </div>
        
        <div class="card-body text-center">
            <h2 class="card-title">Awesome!</h2>
            <p class="card-text">Your payment was successful. Our partners will deliver your car shortly.</p>
        </div>

        <div class="d-grid mx-3 my-1">
            <button class="btn btn-warning" onClick="location.href='./checkout.php'">
                Card
            </button>
           
        </div>
        <div class="d-grid mx-3 my-1">
            
            <button class="btn btn-success mb-2" onClick="location.href='./cash.php'">
                Cash
            </button>
        </div>
        <div class="d-grid mx-3 my-2">
            <button class="btn btn-outline-secondary" onClick="location.href='./../View-car-info'">
                Cancel
            </button>
           
        </div>
    </div>
</div>