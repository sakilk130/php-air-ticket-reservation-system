<?php
 require_once '../../models/database_connect.php';

    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    if(isset($_POST['submit']))
    {
        $uname=$_SESSION['loggedinuser'];
        $err_fname="";
        $fname="";
        $err_lname="";
        $lname="";
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
            $query ="UPDATE users SET fname='$fname', lname='$lname', email='$email', phone=$phone Where uname='$uname'";
            echo $query;
            execute($query);
            echo "<script>alert('Update Successfull !'); location.href='../../views/user/udashboard.php';</script>";
            //header("location:udashboard.php");
        }
    }
?>