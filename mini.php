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
			<div class="wrap-login1000">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                        <img src="images/1200px-NIT_Rourkela_Colour_Logo_SVG.svg.png" alt="nitr" style="height: 80px; width: auto;">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Mini Statement
                    </span>
                   
                   <h3>Account No:   <span class="form-group" id="number" style="margin:20px;">
                     
</span>
                     </h3>
					
                   

					
                </form>
                <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                   <th></th>
                                   <th>Transaction ID</th>
                                   <th>Transaction Date</th>
                                   <th>Transaction</th>
                                   <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody id="data">
                                
                            </tbody>
                    </table>
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
              $.post("db/fetch_t_detail.php", {
                        number: localStorage.getItem("number"),
                    },
                    function(data, status) {
                        console.log(data);
                        if(data === 'false'){
                            alert("No transaction exists");
                        } else {
                            //console.log(JSON.parse(data));
                            var da_ta = JSON.parse(data);
                            $.each(da_ta, function(key, ver) {
                                   var credit = "credit";
                                   if(ver.transaction === "1"){
                                      credit = "credit";
                                   } else {
                                   credit = "debit";
                                   }
                                   $("#number").html(ver.account_number);
                            $('#data').append('<tr><td scope="row"></td><td>'+ ver.transaction_id +'</td><td>'+ ver.date +'</td><td>'+ credit +'</td><td>'+ ver.balance +'</td></tr>');
                    
                });
                        }
                    });
        });
    </script>



</body>
</html>