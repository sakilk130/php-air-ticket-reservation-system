<?php
require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../../views/Login.php");
    }
    function getAllAdmin()
	{
		$query ="SELECT * FROM users WHERE utype='admin'";
		$admin = get($query);
		return $admin;
    }

    function getAdmin($id)
	{
        $query ="SELECT * FROM users WHERE userid=$id";
        $admin = get($query);
		return $admin[0];
    }
    if(isset($_POST['update']))
    {

        $err_fname="";
        $fname="";
        $err_lname="";
        $lname="";
        $err_uname="";
        $uname="";
        $err_email="";
        $email="";
        $err_phone="";
        $phone="";
        $has_err=false;
        if(empty($_POST['fname']))
        {
            $err_fname="*First Name Required.";
            $has_err=true;
        }
        else
        {
            $fname=$_POST['fname'];
        }
        if(empty($_POST['lname']))
        {
            $err_lname="*Last Name Required.";
            $has_err=true;
        }
        else
        {
            $lname=$_POST['lname'];
        }
        if(empty($_POST['uname']))
        {
            $err_uname="*Username Required.";
            $has_err=true;
        }
        else
        {
            $uname=$_POST['uname'];
        }
        if(empty($_POST['email']))
        {
            $err_email="*Email Address Required.";
            $has_err=true;
        }
        else
        {
            $email=$_POST['email'];
        }
        if(empty($_POST['phone']))
        {
            $err_phone="*Phone Number Required.";
            $has_err=true;
        }
        else
        {
            $phone=$_POST['phone'];
        }
        if(!$has_err)
        {
            $id=$_POST["id"];
            $query ="UPDATE users SET fname='$fname', lname='$lname', uname='$uname', email='$email', phone=$phone Where userid=$id";
            execute($query);
            header("location:../../views/superadmin/updateadmin.php");
        }
    }
?>