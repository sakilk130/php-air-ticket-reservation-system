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
    $uname=$_SESSION['loggedinuser'];
    $A1 = $_POST['A1'];
    $id=$_POST["id"];
    $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$A2', '$pnum')";
    echo $query;
    execute($query);
    //header("Location:ubookflight.php");
  }
}
?>