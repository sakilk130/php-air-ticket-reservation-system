<?php
require_once '../../models/database_connect.php';
session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../../views/Login.php");
    }
    function getAllContact()
    {
        $query ="SELECT * FROM contacts";
        $admin = get($query);
        return $admin;	
    }
?>