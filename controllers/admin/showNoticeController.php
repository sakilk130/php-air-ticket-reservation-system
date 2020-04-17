<?php
require_once '../../models/database_connect.php';
session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    function getAllNotice()
	{
		$query ="SELECT * FROM notice";
		$notice = get($query);
		return $notice;
    }
    function removeNotice($id)
	{
        $query ="DELETE FROM notice WHERE id=$id";
        execute($query);
		header("Location:../../views/admin/showNotice.php");
    }
    function getNotice($id)
	{
        $query ="SELECT * FROM notice WHERE id=$id";
        $notice = get($query);
		return $notice[0];
    }
    if(isset($_POST['updateNotice'])){
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
       
        $id=$_POST["id"];
        $query ="UPDATE notice SET notice='$notice' Where id=$id";
        execute($query);
        header("location:../../views/admin/showNotice.php");
    }
}
?>