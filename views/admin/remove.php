<?php
require_once '../../controllers/admin/removeFlightController.php';
$uid = $_GET["id"];
removeFlight($uid);
?>