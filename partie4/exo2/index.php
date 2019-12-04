<?php
function jeaneude( $incredible = 'salut', $hey = 'salaud')
{
    return ($incredible . " " .  $hey); 
}

?>
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8" />
    <title>part4ex1</title>
  </head>
  <body>
      <?php
   echo jeaneude()  
      ?>
  </body>
</html>