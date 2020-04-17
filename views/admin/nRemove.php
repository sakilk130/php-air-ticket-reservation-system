<?php
require_once '../../controllers/admin/showNoticeController.php';
$uid = $_GET["id"];
removeNotice($uid);
?>