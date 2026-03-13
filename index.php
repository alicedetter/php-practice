<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$db="php-practice";

$connection_to_db=mysqli_connect($host,$user,$pass,$db);
if(isset($_POST['submit'])):
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if($username == )
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="skicka">
    </form>
</body>
</html>