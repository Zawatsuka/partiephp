<?php
$answer = 'yes';

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
        if ($answer == 'yes'){
            echo "bien trouvé";
        } else {
            echo " eh nan !";
            }
        ?>
        

    </p>
</body>
</html>