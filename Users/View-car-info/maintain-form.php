<?php
include("./../../template/nav-employee.php");

?>

<div class="container p-4 my-5">
    <h3 class="my-3"><strong>JPH5334</strong></h3>
<form class="needs-validation" action="maintain-success.php" method="POST" novalidate>
    <div class="mb-3">
        <label for="cardnumber" class="form-label">Mileage</label>
        <div class="input-group mb-3">
        
            
            <input id="cardnumber" name="mileage" type="text" class="form-control" placeholder="100,000" aria-label="Username" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">KM</i></span>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="cardnumber" class="form-label">Defects, comments</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="..." aria-label="MM">
                </div>
            </div>
        </div>
       
    </div>
    
    
    <div class="d-grid mt-3">
        
        <button type="submit" class="btn btn-success"><strong>Update this car</strong></button>
    </div>
    
  
</form>
<div class="d-grid mt-2">
    <button class="btn btn-outline-secondary mb-3" onClick="location.href='failed.php'"><strong>Cancel</strong></button>
</div>
</div>
