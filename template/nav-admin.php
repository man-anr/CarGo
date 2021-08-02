

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
	<title>CarGo Admin</title>
	<link rel="stylesheet" href="http://man-anr.com/sd-project/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="http://man-anr.com/sd-project/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="http://man-anr.com/sd-project/css/style.css" />
    
	
</head>

<body class="bg-light d-grid justify-content-center">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong>Car<i class="text-warning">Go</i></strong></a>
            <div>
                
                <div class="btn-group dropstart ">
                    <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
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




   

    
   <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
      style="background-image: linear-gradient(#00B4DB, #0083B0);"
    >
      <div class="offcanvas-body p-2 pt-4">
        <nav class="navbar-dark">
        <div class="mb-4 text-center" style="font-size: 5rem; color: cornflowerblue;"><i class="bi bi-person-circle text-light"></i></div>
          <ul class="navbar-nav dark">
            <!-- <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li> -->

            <li >
                <span class="ms-3 text-light"><?php echo "ID: Superadmin"?></span>
            </li>
            <li >
                <span class="ms-3 text-light"><?php echo "Name: Admin"?></span>
            </li>
            <li >
                <span class="ms-3 text-light"><?php echo "Account: SuperAdmin"?></span>
            </li>

            <li class="my-2 text-white"><hr class="dropdown-divider" style="height:2px"/></li>


            <li >
              <a href="index.php" class="nav-link px-3 ">
                
                <span class="me-2 "><i class="bi bi-speedometer text-light"></i></span>
                <span class="text-light">Dashboard</span>
              </a>
            </li>

            <li class="my-2 text-white"><hr class="dropdown-divider" style="height:2px"/></li>

            <li>
              <div class="small text-light fw-bold text-uppercase px-3 ">
                Panels
              </div>
            </li>

            <li>
              <a
                class="nav-link px-3 active"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-card-list"></i></span>
                <span class="text-light">Cars</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">

                  <li>
                    <a href="admin.php" class="nav-link px-3 text-light">
                      <span class="me-2"><i class="bi bi-receipt"></i></span>
                      <span>Location</span>
                    </a>
                  </li>

                  <li>
                    <a href="lecturer.php" class="nav-link px-3 text-light">
                      <span class="me-2"
                        ><i class="bi bi-alt"></i></span>
                      <span>Modify</span>
                    </a>
                  </li>

                  

                </ul>
              </div>
            </li>

            <li>
              <a href="workload.php" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-receipt"></i></span>
                <span>Orders</span>
              </a>
            </li>

            <li>
              <a href="workload.php" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-person-badge-fill text-light"></i></span>
                <span>Accounts</span>
              </a>
            </li>

            <!-- <li class="my-2"><hr class="dropdown-divider bg-light " /></li>

            <li>
              <div class=" small fw-bold text-uppercase px-3 mb-3 text-light">
                Addons
              </div>
            </li> -->

            <li>
              <a href="#" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>

            <li>
              <a href="#" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->


    


</body>


    
    



	<script src="http://man-anr.com/sd-project/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="http://man-anr.com/sd-project/js/jquery-3.5.1.js"></script>
    <script src="http://man-anr.com/sd-project/js/jquery.dataTables.min.js"></script>
    <script src="http://man-anr.com/sd-project/js/dataTables.bootstrap5.min.js"></script>
    <script src="http://man-anr.com/sd-project/js/script.js"></script>
</body>
</html>