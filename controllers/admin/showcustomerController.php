<?php
require_once '../../models/database_connect.php';
session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    function getAllCustomer()
	{
		$query ="SELECT * FROM users WHERE utype='user'";
		$user = get($query);
		return $user;
    }
    
?>