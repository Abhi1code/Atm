<?php

require("user_trans.php");
$getconinfo = new Usertrans;

if(isset($_POST['id']) && isset($_POST['pin'])){
    echo json_encode($getconinfo->verifyuser($_POST['id'], $_POST['pin']));
} else {
    echo "something is not right";
}
?>