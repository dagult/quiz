<!DOCTYPE html>
<html lang="en">
<head>
	<title>CALCULATOR BMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/20140818_193535_logo-mabes-tni.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="index.php" method="post">
					<span class="login100-form-title">
						Calculator BMI
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Anda tidak memasukan BERAT">
						<div align="center"> 
						<span  class="label-input100">WEIGHT</span> 
					</div>
						<input class="input100" type="text" name="berat" placeholder="Your Weight (Kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Anda tidak memasukan TINGGI">
						<div align="center"> 
						<span class="label-input100">HEIGHT</span>
					</div>
						<!-- <div align="center">  -->
						<input class="input100" type="text" name="tinggi" placeholder="Your Height (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
						<span class="focus-input100"></span>
					
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>
										
					<div class="container-login100-form-btn">
						<button type="submit" name="hitung" value="hitung">
						Calculate BMI
					</button>
						</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="#">
							
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							
						</a>
					</div>
				</form>
				<?php
				if(!empty($_POST['hitung'])) { 
			    $berat = $_POST['berat'];
			    $tinggi = $_POST['tinggi'];
			    function bmi($berat,$tinggi) {
			        $bmi = $berat/($tinggi*$tinggi);
			        return $bmi;
			    }   
			    $bmi = bmi($berat,$tinggi);
			    if ($bmi <= 18.5) {
			        $output = "UNDERWEIGHT";
			        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			        $output = "NORMAL WEIGHT";
			        } else if ($bmi > 24.9 AND $bmi<=29.9) {
			        $output = "OVERWEIGHT";
			        } else if ($bmi > 30.0) {
			        $output = "OBESE";
			    }
			    echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
			    echo "$output";
			}
			?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>