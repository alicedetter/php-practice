<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['get_btn'])): ?>
        <form action="index.php" method="POST">
            <input type="text" name="text" value="<?=$_GET['text']?>">
            <input type="submit" name="post_btn" value="skicka">
        </form>
    <?php elseif(isset($_POST['text'])): ?>
        <form action="index.php" method="GET">
            <input type="text" name="text" value="<?=$_POST['text']?>">
            <input type="submit" name="get_btn" value="skicka">
        </form>
    <?php else: ?>
        <form action="index.php" method="GET">
            <input type="text" name="text" value="">
            <input type="submit" name="get_btn" value="skicka">
        </form>
    <?php endif ?>
</body>
</html>