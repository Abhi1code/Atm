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
						Account Type
</span>
                    

					
				</form>
				<div class="">
						<button class="login100-form-btn"  id="current">
							 Current
						</button>
                    </div>
                    <div class="container-login100-form-btn" style="margin-left:240px; margin-top: -50px; ">
						<button class="login100-form-btn" id="saving">
							Savings
						</button>
                    </div>
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
            $("#saving").click(function(e) {
                e.preventDefault();
                $.post("db/select_account.php", {
                        id: localStorage.getItem("id"),
                        type: 0
                    },
                    function(data, status) {
                        console.log(data);
                        if(data === 'false'){
                            alert("Account type not exist");
                        } else {
							localStorage.setItem("number", JSON.parse(data).account_number);
							localStorage.setItem("type", 0);
                            //alert("Login successfull");
                            window.open("option.php", '_self');
                        }
                    });
			});
			
			$("#current").click(function(e) {
                e.preventDefault();
                $.post("db/select_account.php", {
                        id: localStorage.getItem("id"),
                        type: 1
                    },
                    function(data, status) {
                        console.log(data);
                        if(data === 'false'){
                            alert("Account type not exist");
                        } else {
							localStorage.setItem("number", JSON.parse(data).account_number);
							localStorage.setItem("type", 1);
                            //alert("Login successfull");
                            window.open("option.php", '_self');
                        }
                    });
            });
        });
    </script>

</body>
</html>