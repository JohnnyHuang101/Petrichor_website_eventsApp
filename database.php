<?php

$localhost = 'localhost';
$username = 'Johnnybaguettess';
$password = 'baguettesland';
$databasename = 'petrichorApp';

$mysqli = new mysqli($localhost, $username, $password, $databasename);

if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}

?>
