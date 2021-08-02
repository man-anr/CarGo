 <?php
 include("../../Database/config.php");
 include("./../../template/nav-employee.php");

 ?>
 
 <div class="m-2 mt-4 pt-4 mb-5 py-3">

    

    <div class="card mb-2 mt-4 my-2 shadow-sm border-primary" >

     <h1 class="card-header">
         Search a car 
     </h1>
        <div class="card-body">
        <h5 class="card-text text-muted">to Maintain</h5>
            <form class="needs-validation" method="POST" action="./maintenance-update.php" novalidate>
                <div class="row g-0">



                    <div class="col-md-12 me-1 my-1">
                        <div class="form-floating">
                        <select class="form-select" name="state" id="state" onchange="myFunction()">
                            <option selected disabled>Select one</option>
                            <?php
                            $find_state = "SELECT * FROM car";
                            $query_find_state = mysqli_query($con, $find_state);
                            while ($fetch_state = mysqli_fetch_array($query_find_state)){
                                ?>
                                <option value="<?php echo $fetch_state['plate_no']?>"><?php echo $fetch_state['plate_no']?></option>
                                <?php
                            }
                            
                            ?>
                            
                        </select>
                        <label for="state">Plate Number</label>
                        </div>
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
                        Search a car that I've maintained
                    </button>
                </div>
            </form>
        </div>
    </div>
    


</main>