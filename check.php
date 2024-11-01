<?php

session_start();

//check for the token
if(!empty($_SESSION['token'])){

	echo json_encode(array("success" => true, "message" => "Safe!", "usernum" => $_SESSION['usernum']));
}
else{

	echo json_encode(array("success" => false, "message" => "Wrong!"));
}

?>
