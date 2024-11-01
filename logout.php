<?php

header("Content-Type: application/json");

//continues a session
session_start();

//resets the session variables
session_unset();

//destroy the session
session_destroy();

echo json_encode(array("success" => true, "message" => "Logout!"));
exit;
?>
