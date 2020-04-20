<?php
require_once '../../models/database_connect.php';
session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    if(isset($_POST['sendNotice'])){
        $err_notice="";
        $notice="";
        $has_err=false;

    if(empty($_POST['notice']))
    {
        $err_notice="*Enter Any Notice";
        $has_err=true;
    }
    else
    {			
        $notice=htmlspecialchars($_POST['notice']);
    }
    if(!$has_err){
        $ttype="user";
        $currentDateTime = date('Y-m-d H:i:s');
        
        $query = "INSERT INTO notice (ddate, notice, ttype) VALUES ('$currentDateTime', '$notice', '$ttype')";
        $result=execute($query);
        echo "<script>alert('Notice Send!'); location.href='../../views/admin/showNotice.php';</script>";
        //header("Location:../../views/admin/admin.php");
    }
}
?>