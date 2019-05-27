<?php

require("user_trans.php");
$getconinfo = new Usertrans;

if(isset($_POST['number'])){
    echo $getconinfo->change_pin($_POST['id'], $_POST['number'], $_POST['type'], $_POST['old'], $_POST['new']);
} else {
    echo "something is not right";
}
?>