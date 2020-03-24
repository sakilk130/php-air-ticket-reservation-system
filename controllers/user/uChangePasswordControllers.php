<?php
session_start();
if(!isset($_SESSION['loggedinuser']))
{
header("Location:../Login.php");
}

require_once '../../models/database_connect.php';

$err_cpass="";
$cpass="";
$err_npass="";
$npass="";
$err_cfpass="";
$cfpass="";
$wrong_pass="";
$has_err=false;

if (isset($_POST['submit']))
{
  if (empty($_POST['cpass']))
  {
    $err_cpass = '*Current Password Required.';
    $has_err=true;
  }
  else
  {
    $cpass = $_POST['cpass'];
  }
  if(empty($_POST['npass']))
  {
    $err_npass = '*New Password Required.';
    $has_err=true;
  }
  if(empty($_POST['npass']))
  {
    $err_cfpass = '*Confirm Password Required.';
    $has_err=true;
  }
  else
  {
    if($_POST["npass"] === $_POST["cfpass"])
    {
      $npass=htmlspecialchars($_POST['npass']);
      $cfpass=htmlspecialchars($_POST['cfpass']);
    }
    else
    {
      $wrong_pass="*Password Doesn't Match";
      $has_err=true;
    }
  }
  if(!$has_err)
  {
    header("Location:ubookflight.php");
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