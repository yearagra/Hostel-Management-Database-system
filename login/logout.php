<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: http://localhost/Website/index.php");

?>
