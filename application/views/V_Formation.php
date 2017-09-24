<!DOCTYPE html>
<html>
    <head>
        <title>SNCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Les Formation</h1>
        <?php
        
        foreach ($LesFormations as $formation)
            {
        ?>
        <a href="V_Formation.php/CtrlAcceuil/<?php echo $formation->numeroActivite; ?>"><br> <?php echo $formation->intitule ; ?></a>
         <?php   
        }
        ?>
        
       
        
    </body>
</html>