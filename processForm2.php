<?php
session_start();
$_Session['subTenKG'] = $_POST['subTenKG'];
$_Session['overTenKG'] = $_POST['overTenKG'];

header('location:finalStep.php');
?>