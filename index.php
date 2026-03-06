<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $siffror = ["ett", "två", "tre", "fyra", "fem", "sex", "sju", "åtta", "nio", "tio"];
        $counter = count($siffror);
        for($x=0; $x<$counter; $x++){
            echo "rad ", $siffror[$x], "<br>";
        }
    ?>
    
</body>
</html>