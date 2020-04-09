<?php
require_once ('../../controllers/superadmin/removeadminController.php');
$uid = $_GET["id"];
removeAdmin($uid);
?>