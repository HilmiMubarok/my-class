<?php ob_start(); session_start();

$conn = new mysqli("localhost", "root", "", "db_myclass");

include 'AuthFunction.php';