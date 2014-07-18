<!DOCTYPE html>
<html>
	<head>
		<title>Enrollment System</title>
		<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap-theme.css">
		<script src="jquery-2.1.1/jquery-2.1.1.js"></script>
		<script src="jquery-ui-1.11.0/jquery-ui.css"></script>
		<script src="bootstrap-3.2.0-dist/js/bootstrap.js"></script>
	</head>
		<div>
		  <img src="image/simple.jpg" alt="">
		</div>
	<body>
		
		<div class="page-header">
  		<h1>Enrollment System</h1>
		</div>
		
		<form action="regform.php" method="post">
		  
		  <fieldset>
		    <legend><span class="glyphicon glyphicon-user"></span> Student Information</legend>
		    <div class="input-group input-group-sm">
			  <span class="input-group-addon">Student Name:</span>
			  <input type="text" class="form-control" placeholder="Student Name" name="studentName">
			</div><p></p>
			<div class="input-group input-group-sm">
			  <span class="input-group-addon">Student Number:</span>
			  <input type="text" class="form-control" placeholder="Student Number" name="studentNumber">
			</div><p></p>
			<div class="input-group input-group-sm">
			  <span class="input-group-addon">Number of Units:</span>
			  <input type="text" class="form-control" placeholder="Number of Units" name="units">
			</div>
		  </fieldset><p></p>
		
			<fieldset>
				<legend><span class="glyphicon glyphicon-th-large"></span> Course</legend>
				<div class="row">
				  <div class="col-sm-6">
				    <div class="input-group input-group-sm">
				      <span class="input-group-addon">
				        <input type="radio" name="course" value="Engineering">
				      </span>
				      <input type="text" class="form-control" placeholder="Engineering" disabled style="background-color: white">
				    </div><!-- /input-group --><p></p>
				  </div><!-- /.col-lg-6 -->
				  <div class="col-sm-6">
				    <div class="input-group input-group-sm">
				      <span class="input-group-addon">
				        <input type="radio" name="course" value="Business Administration">
				      </span>
				      <input type="text" class="form-control" placeholder="Business Administration" disabled style="background-color: white">
				    </div><!-- /input-group --><p></p>
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
				
				<div class="row">
				  <div class="col-sm-6">
				    <div class="input-group input-group-sm">
				      <span class="input-group-addon">
				        <input type="radio" name="course" value="HRM">
				      </span>
				      <input type="text" class="form-control" placeholder="HRM" disabled style="background-color: white">
				    </div><!-- /input-group --><p></p>
				  </div><!-- /.col-lg-6 -->
				  <div class="col-sm-6">
				    <div class="input-group input-group-sm">
				      <span class="input-group-addon">
				        <input type="radio" name="course" value="Dentistry">
				      </span>
				      <input type="text" class="form-control" placeholder="Dentistry" disabled style="background-color: white">
				    </div><!-- /input-group --><p></p>
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</fieldset> <p></p>
		
			<fieldset>
				<legend><span class="glyphicon glyphicon-book"></span> Year Level</legend>
				<select class="form-control input-sm" name="yrlevel" placeholder="Year Level">
					<option name="yrlevel" value="" default selected> Select Year Level </option>
					<option name="yrlevel" value="1"> 1<sup>st</sup> Year </option>
					<option name="yrlevel" value="2"> 2<sup>nd</sup> Year </option>
					<option name="yrlevel" value="3"> 3<sup>rd</sup> Year </option>
					<option name="yrlevel" value="4"> 4<sup>th</sup> Year </option>
					<option name="yrlevel" value="5"> 5<sup>th</sup> Year </option>
				</select>
			</fieldset> <p></p>
		
			<fieldset>
				<legend><span class="glyphicon glyphicon-cog"></span> Mode of Scheme</legend>
				<select class="form-control input-sm" name="modeofscheme" placeholder="Mode of Scheme">
					<option name="modeofscheme" value="" default selected> Select Mode of Scheme </option>
					<option name="modeofscheme" value="Cash"> Cash </option>
					<option name="modeofscheme" value="Installment"> Installment </option>
				</select>
			</fieldset> <p></p>
			
			<input type="submit" class="btn btn-default btn-sm center-block" value="Submit"></input>
			
		</form> 
		
	</body>	
	
</html>