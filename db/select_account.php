<?php

require("user_trans.php");
$getconinfo = new Usertrans;

if(isset($_POST['id']) && isset($_POST['type'])){
    echo json_encode($getconinfo->selectaccount($_POST['id'], $_POST['type']));
} else {
    echo "something is not right";
}
?>