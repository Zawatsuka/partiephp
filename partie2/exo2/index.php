<?php
$age = 45;
$gender = 'femme';

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
        <?php
        if ($gender == 'homme'){
            echo "Vous êtes un homme";
        } else if ($gender == 'femme'){
            echo "Vous êtes une femme";
            }
        ?>

    </p>
</body>
</html>