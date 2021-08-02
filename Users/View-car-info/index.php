 <?php
 include("./../../template/nav-bar.php");
 include_once("./../../Database/config.php");

 ?>
 
 <div class="px-2 my-5 py-3 ">



    <div class="card mb-2 my-2 shadow-sm border-primary" >

     <h1 class="card-header">
         Location
     </h1>
        <div class="card-body">
        <h5 class="card-text text-muted">Please select your pick-up location</h5>
            <form class="needs-validation" method="POST" action="./../Search-car/" novalidate>
                <div class="row g-0">



                    <div class="col-md-12 me-1 my-1">
                        <div class="form-floating">
                        <select class="form-select" name="state" id="state" onchange="myFunction()">
                            <option selected disabled>Select one</option>
                            <?php
                            $find_state = "SELECT DISTINCT state FROM location";
                            $query_find_state = mysqli_query($con, $find_state);
                            while ($fetch_state = mysqli_fetch_array($query_find_state)){
                                ?>
                                <option value="<?php echo $fetch_state['state']?>"><?php echo $fetch_state['state']?></option>
                                <?php
                                $_SESSION['state'] = $fetch_state['state'];
                            }
                            
                            ?>
                            
                        </select>
                        <label for="state">State</label>
                        </div>
                    </div>



                    <div class="col-md-12 me-1 my-1">
                        <div class="form-floating">
                        <select class="form-select" name="region" id="region" aria-label="region">
                            <option selected disabled>Select one</option>
                            <?php
                            $find_region = "SELECT DISTINCT region FROM location WHERE state ='johor'";
                            
                            $query_find_region = mysqli_query($con, $find_region);
                            while ($fetch_region = mysqli_fetch_array($query_find_region)){
                                ?>
                                <option value="<?php echo $fetch_region['region']?>"><?php echo $fetch_region['region']?></option>
                                <?php
                            }
                            
                            ?>
                        </select>
                        <label for="region">region</label>
                        </div>
                        <?php 
                        // echo $find_region;
                        ?>
                    </div>


                    <!-- <div class="col-md me-1 my-1">
                        <div class="d-grid">
                            <div class="btn-group dropup">
                            <button class="btn btn-outline-dark text-right" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Choose Subregion
                            </button>
                            <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton" >
                                
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                    Batu Pahat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                    Pontian
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                    Johor Bahru
                                    </label>
                                </div>
                            </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-12 d-grid mt-3">
                    <button type="submit" class="btn btn-primary">
                        Search My Next Rental Car
                    </button>
                </div>
            </form>
        </div>
    </div>


     
    </div>


<script >

 function myFunction() {
    var e = document.getElementById("state");
    var state = e.value;
    console.log(state);
 }

</script>