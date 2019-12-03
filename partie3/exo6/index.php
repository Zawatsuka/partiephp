<?php
     $departement = ['Nord'=>59 ,'Pas-de-Calais' => 62 , 'Picardie' => 80 , 'Aisne'=> 02 , 'Oise'=> 60];
                
 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>exo6</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="cours.css">
        </head>
        
        <body>
        <p><?php
       foreach($departement as $wow => $incredible)
       {
           echo $wow . ' a le numero de département ' . $incredible . '<br />';
       }
          ?>
      </p>
        </body>
    </html>