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
					<div class="text-center my-3">
						<img src="../../res/logo1.png" alt="logo" width="300">
					</div>
					<div class="card rounded-3 shadow">
						<div class="card-body p-5">
                            
							<h3 class="fs-4 card-title fw-bold mb-4">Welcome Back!</h3>
							<form method="POST" class="needs-validation" action="./../Validation/auth.php" novalidate="" autocomplete="off">

								<div class="form-floating mb-3">
                                    <input name="username" type="username" class="form-control" id="username" placeholder="username">
                                    <label for="floatingInput">Username</label>
                                </div>
                                <div class="form-floating">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

								<!-- <p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p> -->

								<div class="d-grid mt-3">
									<button type="submit" class="btn btn-primary">
										Sign in
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't own an account? <a href="./../Register" class="text-dark">Create one</a>
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