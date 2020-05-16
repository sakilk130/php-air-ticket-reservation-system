<?php
require_once '../../models/database_connect.php';
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    header("Location:../../views/Login.php");
}
function getEmail($id)
{
    $query ="SELECT * FROM contacts WHERE id=$id";
    $admin = get($query);
    return $admin[0];
}

?>