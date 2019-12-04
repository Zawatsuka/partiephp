<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8" />
    <title>part4ex2</title>
  </head>
  <body>
  <?php
function jeaneude( $incredible = '5', $hey = '5')
{
    if ($incredible > $hey){
        return ('le premier chiffre est plus grand');
    }
    elseif ($incredible < $hey){
        return ('le premier chiffre est plus petit') ;
    }
    elseif ($incredible == $hey){
    return ('les deux chiffres sont egaux ') ;
}
};

echo jeaneude();

?>
  </body>
</html>