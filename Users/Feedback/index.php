<?php
include("./../../template/nav-bar.php");

?>

<body style="background-image: url(./../../res/feedback.png);background-size:cover;">
 <div class="container my-5 py-5 " >
   <div class="row" >
    <div class="col-md-3"></div>
      <div class="col-md-6 py-2 border border-light rounded-3 shadow"> 
        <h2 class="text-white">Feedback Form</h2>
        <p class="text-white">We would love to hear your thoughts, concerns or problem with anything so we can improve!</p>
        <hr>
		<form action="./../View-car-info">
		    <h4 >Feedback type</h4>
		    <div class="row ">
		      <div class="col-md-4 ">
		    	<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				<label class="form-check-label text-dark" for="flexCheckDefault">
					Comments
				</label>
		      </div>
		      <div class="col-md-4">
		    	<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				<label class="form-check-label text-dark" for="flexCheckDefault">
					Bug Reports
				</label>   
		      </div>      
		      <div class="col-md-4">
		    	<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				<label class="form-check-label text-dark" for="flexCheckDefault">
					Questions
				</label>  
		      </div>
		    </div>

		    <div class="form-group mt-3 mb-3" >
		    	<label class="form-label">Full Name</label>
		    	<input type="text text-white" class="form-control " required="">
		  	</div>
		  	<div class="form-group mb-2">
		    	<label  class="form-label">Email</label>
		    	<input type="Email" class="form-control" required="">
		  	</div>
		    <div class="form-group mb-2">
		    	<label  class="form-label">Describe Feedback:</label>
		    	<textarea rows="4" class="form-control" required=""></textarea>
		  	</div>

		  	<div class="d-grid pb-3 pt-1"><button type="submit" class="btn btn-primary">Submit feedback</button></div>
		</form>
      </div>
    </div>
  </div>
 </body>  