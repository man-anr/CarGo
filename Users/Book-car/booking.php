<?php
include("./../../template/nav-bar.php");

?>
<div class="pb-4 my-5 pt-2">
    <div class="card my-3 mx-2 mb-5 shadow-sm" style="max-width: 28rem;">
        <h5 class="card-header">Confirm Your Details</h5>
        <div class="card-body">
            <form class="row g-3 " action="./../Payment/options.php" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label" action="Payment/stripe.php">First name</label>
                <input type="text" class="form-control" id="validationCustom01" value="John" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" value="Doe" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-8">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" value="johndoe" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Delivery Address" aria-label="Delivery Address" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-geo-fill"></i></button>
                </div>
            </div>
            <div class="col-md-12">
                 <div class="input-group">
                     <span class="input-group-text "><i class="bi bi-calendar-range-fill"></i></span>
                        <input type="text" class="form-control me-2" placeholder="DD/MM/YY" aria-label="date"> <h4><strong>-</strong></h4>
                        <span class="input-group-text ms-2"><i class="bi bi-calendar2-range"></i></span>
                        <input type="text" class="form-control" placeholder="DD/MM/YY" aria-label="date">
                 </div>
            </div>
            <div class="col-md-12">
                 <div class="input-group mb-3">
                    
                    <span class="input-group-text "><i class="bi bi-clock-fill"></i></span>
                    <input type="text" class="form-control me-2" placeholder="00:00" aria-label="time"> <h4><strong>-</strong></h4>
                    <span class="input-group-text ms-2"><i class="bi bi-clock-history"></i></span>
                    <input type="text" class="form-control" placeholder="00:00" aria-label="time">
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    <a href="">Agree to terms and conditions</a>
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-grid">
                <button class="btn btn-primary" type="submit">Choose Payment Options</button>
                </div>
            </div>
            </form>
            <div class="d-grid mt-2">
                <button class="btn btn-outline-secondary mb-3" onClick="location.href='../Payment/failed.php'"><strong>Cancel</strong></button>
            </div>
            
        </div>
        
    </div> 
</div>