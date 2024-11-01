<?php

session_start();
require("database.php");
header("Content-Type: application/json");
$eventnum = $_POST['eventnum'];

//delete the comment based on the comment_number
$stmt = $mysqli->prepare("delete from event where eventnum = ?");

if(!$stmt){
  printf("Query Prep Failed: %s\n", $mysqli->error);
  exit;
}

$stmt->bind_param("d", $eventnum);
$stmt->execute();
$stmt->close();

echo json_encode(array("success" => true, "message" => "Event modified."));
exit;

 ?>
