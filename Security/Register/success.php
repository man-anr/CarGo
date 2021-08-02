<?php 

	session_start();
	
	// if(isset($_SESSION['userlogin'])){
	// 	header("Location: ../index.php");
	// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Man">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>CarGo Sign in</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
	
</head>

<body class="bg-light" style="background-image: url(./../../res/feedback.png); background-size: cover; background-repeat: no-repeat;">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					
					<div class="container-fluid py-4 my-5">
                    <div class="card shadow">
                     <img src="https://image.freepik.com/free-vector/public-approval-concept-illustration_52683-32169.jpg" class="card-img-top" alt="...">
                        
                        <div class="card-body text-center">
                            <h2 class="card-title">Awesome!</h2>
                            <p class="card-text">Registration successful. Let's get started</p>
                        </div>

                        <div class="d-grid mx-3 my-2">
                            
                            <button class="btn btn-outline-primary mb-2" onClick="location.href='./../Login'">
                               Log in
                            </button>
                        </div>
                    </div>
                </div>
					<div class="text-center mt-5 text-muted">
						Group 2 &copy; Sem 2, 2021 &mdash; BIE20203 
					</div>
				</div>
			</div>
		</div>
	</section>


</body>


	<script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../../js/jquery-3.5.1.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>
    <script src="../../js/dataTables.bootstrap5.min.js"></script>
    <script src="../../js/script.js"></script>
</body>
</html>