<?php
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        if ($gender == 'homme'){
            echo "Vous êtes un développeur";
        } else if ($gender == 'femme'){
            echo "Vous êtes une développeuse";
            }
        ?>
</body>
</html>