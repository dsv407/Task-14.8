<?php
session_start();
$auth = null;
$_SESSION['auth'] = false;
header('Location: index.php');
?>