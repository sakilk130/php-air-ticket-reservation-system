<?php

 session_start();
 if(!isset($_SESSION['loggedinuser']))
 {
 header("Location:../Login.php");
 }

$err_pnum="";
$pnum="";
$has_err=false;
if (isset($_POST['submit']))
{
  if ($_POST['pnum'] == '')
  {
    $err_pnum = '*Phone Number Required';
    $has_err=true;
  }
  else
  {
    $pnum = $_POST['pnum'];
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