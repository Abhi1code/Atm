<?php

require("user_trans.php");
$getconinfo = new Usertrans;

if(isset($_POST['id']) && isset($_POST['type'])){
    //$data =  json_encode($getconinfo->withdraw_cash($_GET['id'], $_GET['type'], $_GET['amount']));
    echo $getconinfo->withdraw_cash($_POST['id'], $_POST['type'], $_POST['amount']);
} else {
    echo "something is not right";
}
?>