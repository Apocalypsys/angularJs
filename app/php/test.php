<?php
error_reporting(1);
require_once("database.php");
require_once("asd.php");

action::getRows(users);
echo json_encode($data);
?>