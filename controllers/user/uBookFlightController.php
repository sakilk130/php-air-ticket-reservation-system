<?php
require_once '../../models/database_connect.php';

session_start();
if(!isset($_SESSION['loggedinuser']))
{
header("Location:../../views/Login.php");
}
function getAllBookFlight($user)
{
    $query ="SELECT * FROM tickets WHERE uname='$user'";
	$user = get($query);
	return $user;
}
function getFlightDetails($id)
{
    $query ="SELECT * FROM flight WHERE fid=$id";
	$flight = get($query);
	return $flight;
}
?>