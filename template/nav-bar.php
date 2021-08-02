

<?php 

	session_start();
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Man">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Rent a car now!">
	<title>CarGo Book A Car!</title>
	<link rel="stylesheet" href="http://man-anr.com/sd-project/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="http://man-anr.com/sd-project/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="http://man-anr.com/sd-project/css/style.css" />
    
	
</head>

<body class="bg-light d-grid justify-content-center">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong>Car<i class="text-warning">Go</i></strong></a>
            <div>
                
                <div class="btn-group dropstart ">
                    <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                        <i class="bi bi-search"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <form class=" mx-2">
                            <input class="dropdown-item form-control bg-light me-2 shadow-sm border border-secondary" type="search" placeholder="Search" aria-label="Search">
                            <div class="dropdown-divider"></div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary d-grid">Search</button>
                            </div>
                        </form>
                    </ul>
                   
                </div>
                 <button class="btn btn-secondary float-right ms-2" onClick="location.href='http://man-anr.com/sd-project/Security/Login/'">Log Out<i class="bi bi-box-arrow-in-right ms-2"></i></button>
            </div>
        </div>
    </nav>




   

    
    <nav class="navbar fixed-bottom navbar-dark shadow border" style="background-color: #dde7eb;">
        <div class="container-fluid d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                <button class="btn btn-light mx-2 shadow " onClick="location.href='http://man-anr.com/sd-project/Users/Search-car/index.php'">
                    <i class="bi bi-wallet-fill"></i>
                </button>
                <button class="btn btn-light mx-2 shadow " onClick="location.href='./../Receipt/index.php'">
                    <i class="bi bi-menu-button-wide-fill"></i>
                </button>
                <button class="btn btn-warning mx-2 shadow" onClick="location.href='http://man-anr.com/sd-project/Users/View-car-info/index.php'">
                    <i class="bi bi-house-door-fill"></i>
                </button>
                <button class="btn btn-light mx-2 shadow" onClick="location.href='http://man-anr.com/sd-project/Users/Book-car/booking.php'">
                    <i class="bi bi-receipt-cutoff"></i>
                </button>
                <button class="btn btn-light mx-2 shadow " onClick="location.href='http://man-anr.com/sd-project/Users/Search-car/index.php'">
                    <i class="bi bi-person-circle"></i>
                </button>
                
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            </div>
            
        </div>
    </nav>


    


</body>


    
    



	<script src="http://man-anr.com/sd-project/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="http://man-anr.com/sd-project/js/jquery-3.5.1.js"></script>
    <script src="http://man-anr.com/sd-project/js/jquery.dataTables.min.js"></script>
    <script src="http://man-anr.com/sd-project/js/dataTables.bootstrap5.min.js"></script>
    <script src="http://man-anr.com/sd-project/js/script.js"></script>
</body>
</html>