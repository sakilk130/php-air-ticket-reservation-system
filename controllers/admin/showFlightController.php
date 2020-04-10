<?php
require_once '../../models/database_connect.php';
session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    function getAllFlights()
	{
		$query ="SELECT * FROM flight";
		$flight = get($query);
		return $flight;
    }
?>