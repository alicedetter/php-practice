<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $username = "";
        $password = "";
        if(isset($_POST['btn'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }else{ ?>
            <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Skriv in ditt avändarnamn">
                <input type="password" name="password" placeholder="Skriv in ditt lösenord">
                <input type="submit" name="btn" value="Skicka">
            </form>
        <?php } ?>
    <div class="container">
        <p><?=$username?><br><?=$password?></p>
    </div>
    
</body>
</html>