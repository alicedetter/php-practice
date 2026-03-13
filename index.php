<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST['submit'])):
        $name = $_POST['name'];
        $age = $_POST['age'];
    endif;

    if(isset($_POST['submit'])):
        if(intval($age) < 18):
            echo "Hej ", $name, ", du är för ung för att använda denna webbsida.";
        else:
            echo "Hej ", $name, ", välkommen till vår webbsida!";
        endif;
    endif;
    ?>
</body>
</html>