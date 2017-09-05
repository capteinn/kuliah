<?php 
session_start();

// CURL

$_SESSION['message'] = 'Data has been deleted';
header("location: ./");
?>