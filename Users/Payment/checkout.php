<?php
include("./../../template/nav-bar.php");

?>

<div class="container p-4 my-5">
    <h3 class="my-3"><strong>Payment Details</strong></h3>
<form class="needs-validation" action="validate-credentials.php" novalidate>
    <div class="mb-3">
        <label for="cardnumber" class="form-label">Card Number</label>
        <div class="input-group mb-3">
        
            
            <input id="cardnumber" type="text" class="form-control" placeholder="Valid card number" aria-label="Username" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-credit-card-fill"></i></span>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="cardnumber" class="form-label">Expiration Date</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="MM" aria-label="MM">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="YY" aria-label="YY">
                </div>
            </div>
        </div>
       
        <div class="col">
            <label for="cardnumber" class="form-label">CV Code</label>
            <input type="text" class="form-control" placeholder="CCV" aria-label="CCV">
        </div>
    </div>
    <div class="d-grid my-4">
        <div class="btn btn-primary">
            
            <div class="row">
                <div class="col text-left">
                    <span class="text-left">Final Payment</span>
                </div>
                <div class="col text-right">
                    <span class="badge rounded-pill bg-light text-dark ">RM 84</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="d-grid">
        
        <button type="submit" class="btn btn-success"><strong>Pay</strong></button>
    </div>
    
  
</form>
<div class="d-grid mt-2">
    <button class="btn btn-outline-secondary mb-3" onClick="location.href='failed.php'"><strong>Cancel</strong></button>
</div>
</div>
