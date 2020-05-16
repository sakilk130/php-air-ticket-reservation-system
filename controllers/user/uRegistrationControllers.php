<?php

require_once '../../models/database_connect.php';

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
  $err_gender="";
  $gender="";
  $err_pass="";
  $pass="";
  $err_cpass="";
  $cpass="";
  $wrong_pass="";
  $err_birthdate="";
  $birthdate="";
  $has_err=false;
  $u_type="user";
  if(isset($_POST['submit']))
		{
			// if(empty($_POST['fname']))
			// {
      //   $err_fname="*First Name Required";
      //   $has_err=true;
			// }
			// else
			// {			
			// 	$fname=htmlspecialchars($_POST['fname']);
      // }
      // if(empty($_POST['lname']))
			// {
      //   $err_lname="*Last Name Required";
      //   $has_err=true;
			// }
			// else
			// {			
			// 	$lname=htmlspecialchars($_POST['lname']);
      // }
      // if(empty($_POST['uname']))
      // {
      //   $err_uname="*Username Required";
      //   $has_err=true;
      // }
      // else
      // {
      //   $uname=htmlspecialchars($_POST['uname']);
      // }
      // if(empty($_POST['email']))
      // {
      //   $err_email="*Email Required";
      //   $has_err=true;
      // }
      // else
      // {
      //   $email=htmlspecialchars($_POST['email']);
      // }
      // if(empty($_POST['phone']))
      // {
      //   $err_phone="*Phone Number Required";
      //   $has_err=true;
      // }
      // else
      // {
      //   $phone=htmlspecialchars($_POST['phone']);
      // }
      // if(empty($_POST['gender']))
      // {
      //   $err_gender="*Gender Required";
      //   $has_err=true;
      // }
      // else
      // {
      //   $gender=$_POST['gender'];
      // }
      // if(empty($_POST['birthdate']))
      // {
      //   $err_birthdate="*Birthdate is required";
      //   $has_err=true;
      // }
      // else
      // {
      //   $birthdate=$_POST['birthdate'];
      // }
      // if(empty($_POST['pass']))
      // {
      //   $err_pass="*Password Required";
      //   $has_err=true;
      // }
      // if(empty($_POST['cpass']))
      // {
      //   $err_cpass="*Confirm Password Required";
      //   $has_err=true;
      // }
      // else
      // {
      //   if($_POST["pass"] === $_POST["cpass"])
      //   {
      //     $pass=htmlspecialchars($_POST['pass']);
      //     $cpass=htmlspecialchars($_POST['cpass']);
      //   }
      //   else
      //   {
      //     $wrong_pass="*Password Doesn't Match";
      //     $has_err=true;
      //   }
      // }
      // if(!$has_err)
      // {
      // $query = "INSERT INTO users (fname, lname, uname, email, phone, gender, bdate, pass, utype) VALUES ('$fname', '$lname', '$uname', '$email', '$phone', '$gender', '$birthdate', '$pass', '$u_type')";
      // $result=execute($query);
      // echo "<script>alert('Registration Successfull!'); location.href='../Login.php';</script>";
      // //header("Location:../Login.php");
      // }
      $fname=htmlspecialchars($_POST['fname']);
      $lname=htmlspecialchars($_POST['lname']);
      $uname=htmlspecialchars($_POST['uname']);
      $email=htmlspecialchars($_POST['email']);
      $phone=htmlspecialchars($_POST['phone']);
      $gender=$_POST['gender'];
      $birthdate=$_POST['birthdate'];
      $pass=htmlspecialchars($_POST['pass']);
      $cpass=htmlspecialchars($_POST['cpass']);


      $query = "INSERT INTO users (fname, lname, uname, email, phone, gender, bdate, pass, utype) VALUES ('$fname', '$lname', '$uname', '$email', '$phone', '$gender', '$birthdate', '$pass', '$u_type')";
      $result=execute($query);
      echo "<script>alert('Admin Added'); location.href='../../views/superadmin/showadmin.php';</script>";
    }

?>