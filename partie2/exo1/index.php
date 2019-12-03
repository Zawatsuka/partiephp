<?php
$age = 12;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        if ($age > 18){
            echo "Vous êtes majeur";
        } else {
            echo "  Vous êtes mineur.";
            }
        ?>
        

    </p>
</body>
</html>