<!DOCTYPE html>
<html>
    <head>
        <title>SNCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Les Activiter</h1>
        <?php
        
        foreach ($LesAtiviters as $activite)
            {
        ?>
        <a href="V_Activiter.php/CrtlAcceuil/<?php echo $activite->numero; ?>" > <br><?php echo $activite->libelle ; ?></a>
         <?php   
        }
        ?>
        
       
        
    </body>
</html>