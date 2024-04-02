<?php
include('functions.php');
session_start();
$auth = $_SESSION['auth'] ?? null;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SPA Personal page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div><a href="index.php">На главную</a></div>
<div><?php echo getCurrentUser(); ?>, А ТУТ НИЧЕГО НЕТУ!(</div>
</body>
</html>
