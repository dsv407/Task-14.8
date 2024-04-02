<?php
session_start();
$auth = $_SESSION['auth'] ?? null;
if($auth) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SPA Login page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<form action="process.php" method="post">
    <input name="login" type="text" placeholder="Login">
    <input name="password" type="password" placeholder="Password">
    <input name="submit" type="submit" value="Enter">
</form>
</body>
</html>