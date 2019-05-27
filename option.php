<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" >
					<span class="login100-form-logo">
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                        <img src="images/1200px-NIT_Rourkela_Colour_Logo_SVG.svg.png" alt="nitr" style="height: 80px; width: auto;">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						ATM Transaction Options
					</span>


					

					<div class="">
						<button class="login100-form-btn" id="debit" >
							Cash withdrawl
						</button>
                    </div>
                    <div class="container-login100-form-btn" style="margin-left:240px; margin-top: -50px; ">
						<button class="login100-form-btn" id="credit">
							Cash Deposit
						</button>
                    </div>
                    <div class="">
						<button class="login100-form-btn" style="margin-top: 35px" id="balance">
							Balance Enquiry
						</button>
                    </div>
                    <div class="container-login100-form-btn" style="margin-left:240px; margin-top: -50px; ">
						<button class="login100-form-btn" id="stat">
							Mini Statement
						</button>
                    </div>
                    <div class="">
						<button class="login100-form-btn" style="margin-left:120px; margin-top: 20px" id="pinchange">
							Change card pin
						</button>
                    </div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	
<script>
        $(document).ready(function() {
            $("#credit").click(function(e) {
                e.preventDefault();
                window.open("deposit.php", '_self');
			});
			
			$("#debit").click(function(e) {
                e.preventDefault();
                window.open("casha.php", '_self');
			});
			
			$("#balance").click(function(e) {
                e.preventDefault();
                window.open("balance.php", '_self');
			});
			
			$("#stat").click(function(e) {
                e.preventDefault();
                window.open("mini.php", '_self');
			});
			
			$("#pinchange").click(function(e) {
                e.preventDefault();
                window.open("passchange.php", '_self');
            });
        });
    </script>



</body>
</html>