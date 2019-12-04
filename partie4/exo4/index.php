<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <?php
    function jeaneude( $firstname = 'Lucas', $name = 'Thomas' , $age = '20'){
        return "Bonjour" . " " . $name . " " .  $firstname  .", tu as " . $age . " ans !";
      };
    ?>
    <p>
    <?php
    echo jeaneude($firstname = 'Lucas', $name = 'Thomas' , $age = '20');
    ?>
    </p>

    
</body>
</html>