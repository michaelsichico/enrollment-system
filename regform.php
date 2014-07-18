<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap-theme.css">
		<script src="jquery-2.1.1/jquery-2.1.1.js"></script>
		<script src="jquery-ui-1.11.0/jquery-ui.css"></script>
		<script src="bootstrap-3.2.0-dist/js/bootstrap.js"></script>
	</head>
		<div>
		  <img src="image/simple.jpg" alt="">
		</div>
	<body style="top:100px">
		<div class="page-header">
  			<h1>Registration Form</h1>
		</div>
		
		<?php
			$name = $_POST['studentName'];
			$course = $_POST['course'];
			$studnum = $_POST['studentNumber'];
			$yrlevel = $_POST['yrlevel'];
			$units = $_POST['units'];
			$rate = 0;
			$mul = 0;
			$lf = 0;
			$tf = 0;
			$lf = 0;
			$gf = 0;
			$mf = 0;
			$ms = $_POST['modeofscheme'];
			$discount = 0;
			$ttf = 0;
			$uponreg = 0;
			$balance = 0;
			$final = 0;
			
			//courses
			switch ($course) {
				case 'Engineering': 				$rate = 1400;	$mul = 0.07;	break;
				case 'HRM':							$rate = 1300;	$mul = 0.04;	break;
				case 'Business Administration':		$rate = 1200;	$mul = 0.02;	break;
				case 'Dentistry':	$rate = 1600;	$mul = 0.1;	break;
				default:							$rate = 0;	$mul = 0;	break;
			}
			
			//year level
			if ($yrlevel>=1 && $yrlevel<=3) {$gf = 0;}
			if ($yrlevel>=4 && $yrlevel<=5) {$gf = 2500;}
			
			//number of units
			if ($units>=1 && $units<=7) 	{$discount = 500;}
			if ($units>=8 && $units<=14) 	{$discount = 1000;}
			if ($units>=15 && $units<=21) 	{$discount = 1500;}
			if ($units>=22) 				{$discount = 2000;}
			
			//computation
			$tf = $units * $rate;
			$mf = 0.3 * $tf;
			$lf = $mul * $tf;
			$ttf = $tf + $lf + $mf + $gf - $discount;
			
			//final
			switch ($ms) {
				case 'Cash':	$uponreg = $ttf;	$balance = 0;	break;
				case 'Installment':	$uponreg = 0.5 * $ttf;	$balance = $ttf - $uponreg;	break;
				default:	$uponreg = 0;	$balance = 0;	break;
			}
			
			//output
			echo '<div class="row">
				  	<div class="col-sm-6">
				    	Student Name: '. $name .'
				    </div>
				  	<div class="col-sm-6">
				    	Course: '. $course .'
				    </div>
				  </div>
				  <div class="row">
				  	<div class="col-sm-6">
				    	Student Number: '. $studnum .'
				    </div>
				  	<div class="col-sm-6">
				    	Year Level: '. $yrlevel .'
				    </div>
				  </div>';
			echo '<hr>';
			echo '<div class="row">
				  	<div class="col-sm-6">
				    	Number of Units: '. $units .'
				    </div>
				  	<div class="col-sm-6">
				    	Rate/Unit: PHP '. $rate .'
				    </div>
				  </div>';
				  
			echo '<div class="row">
				  	<div class="col-sm-6">
				    	Tuition Fee: PHP '. $tf .'
				    </div>
				  	<div class="col-sm-6">
				    	Total Tuition Fee: PHP '. $ttf .'
				    </div>
				  </div>
				  <div class="row">
				  	<div class="col-sm-6">
				    	Laboratory Fee: PHP '. $lf .'
				    </div>
				  	<div class="col-sm-6">
				    	Upon Registration: PHP '. $uponreg .'
				    </div>
				  </div>
				  <div class="row">
				  	<div class="col-sm-6">
				    	Graduation Fee: PHP '. $gf .'
				    </div>
				  	<div class="col-sm-6">
				    	Balance: PHP '. $balance .'
				    </div>
				  </div>
				  <div class="row">
				  	<div class="col-sm-6">
				    	Miscellaneous Fee: PHP '. $mf .'
				    </div>
				  </div>
				<div class="row">
				  	<div class="col-sm-6">
				    	Discount: PHP '. $discount .'
				    </div>
				 </div>';
		?>
		<br>
		
			<div class="center-block">
				<button type="button" class="btn btn-default btn-sm" onclick="history.back(-1)">Back</button>
				<button type="button" class="btn btn-primary btn-sm" onClick="window.print()" data-toggle="modal" data-target="#regform">Print</button>
			</div>
			<div class="modal fade" id="regform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">UE-Manila</h4>
			      </div>
			      <div class="modal-body">
			        Thank you for enrolling in UE-Manila.
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" onclick="history.back(-1)">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		
	</body>	
	
</html>