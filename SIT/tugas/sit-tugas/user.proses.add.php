<?php 
session_start();

// CURL

$_SESSION['message'] = 'Data has been saved';
header("location: ./");
?>