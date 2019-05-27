<?php

require("user_trans.php");
$getconinfo = new Usertrans;

if(isset($_POST['number'])){
    echo json_encode($getconinfo->fetch_transaction_details($_POST['number']));
} else {
    echo "something is not right";
}
?>