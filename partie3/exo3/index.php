<?php
$months = array (1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex3</title>
  </head>
  <body>
      <p><?php
      foreach($months as $incredible)
          {
            echo $incredible . '<br />';
          }
          ?>
      </p>
  </body>
</html>