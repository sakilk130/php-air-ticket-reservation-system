<?php
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../Login.php");
    }

    require_once '../../models/database_connect.php';

    
    $err_fname="";
    $fname="";
    $err_lname="";
    $lname="";
    $err_email="";
    $email="";
    $err_phone="";
    $phone="";
    $has_err=false;


    if(isset($_POST['submit']))
    {
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
            header("location:udashboard.php");
        }
    }
    if(isset($_POST['submit2'])){
        session_start();
        if (isset($_SESSION['username']))
        {
          unset($_SESSION['username']);
        }
        session_destroy();
        header("location:Login.php");
        exit();
        }
?>