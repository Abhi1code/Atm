<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
                <form class="login100-form validate-form" onload="return false">
                    <span class="login100-form-logo">
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                        <img src="images/1200px-NIT_Rourkela_Colour_Logo_SVG.svg.png" alt="nitr" style="height: 80px; width: auto;">
					</span>

                    <span class="login100-form-title p-b-34 p-t-27">
						ATM Log in
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input id="id" class="input100" type="text" name="username" placeholder="Customer id">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input id="pin" class="input100" type="password" name="pass" placeholder="Card pin">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>


                </form>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" id="button">
						Login
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
    <!---<script src="js/main.js"></script>-->


    <script>
        $(document).ready(function() {
            $("#button").click(function(e) {
                e.preventDefault();
                $.post("db/login.php", {
                        id: $("#id").val(),
                        pin: $("#pin").val()
                    },
                    function(data, status) {
                        console.log(data);
                        if(data === 'false'){
                            alert("Incorrect combination");
                        } else {
                            console.log(JSON.parse(data).customer_id);
                            localStorage.setItem("id", JSON.parse(data).customer_id);
                            alert("Login successfull");
                            window.open("atype.php", '_self');
                        }
                    });
            });
        });
    </script>



</body>

</html>