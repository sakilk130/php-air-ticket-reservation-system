<?php
require_once '../../models/database_connect.php';

session_start();
if(!isset($_SESSION['loggedinuser']))
{
header("Location:../../views/Login.php");
}


if (isset($_POST['submit6']))
{
  $uname=$_SESSION['loggedinuser'];

  $err_cpass="";
  $cpass="";
  $err_npass="";
  $npass="";
  $err_cfpass="";
  $cfpass="";
  $wrong_pass="";
  $has_err=false;
  $wrong_cpass="";

  if (empty($_POST['cpass']))
  {
    $err_cpass = '*Current Password Required.';
    $has_err=true;
  }
  else
  {
    $query ="SELECT pass FROM users WHERE uname='$uname'";
    $pChange = getU($query);
    if(mysqli_num_rows($pChange) > 0){
        while($rows = mysqli_fetch_assoc($pChange)){
          $pass= $rows["pass"];
        }
    }
    else
    {

    }
    $cpass = $_POST['cpass'];

    if($pass == $cpass)
    {

    }
    else
    {
      $wrong_cpass="*Password Doesn't Match.";
      $has_err=true;
    }
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
    if($_POST["npass"] == $_POST["cfpass"])
    {
      $npass=$_POST['npass'];
      $cfpass=$_POST['cfpass'];
    }
    else
    {
      $wrong_pass="*Password Doesn't Match";
      $has_err=true;
    }
  }
  if(!$has_err)
  {
    $query ="UPDATE users SET pass='$cfpass' Where uname='$uname'";
    echo $query;
    execute($query);
    echo "<script>alert('Password Changed!'); location.href='../../views/user/udashboard.php';</script>";
    //header("location:udashboard.php");
  }
}
?>