<!DOCTYPE html>
<html>
    <head>
        <title>SNCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Les Agents</h1>
        
        <?php
      
        foreach ($LesAgents as $agent)
            {
        ?>
        <a href="V_Agent.php/CtrlAcceuil/afficherLesAgents<?php echo $agent->code; ?>" ><br>  <?php echo $agent->prenom ; ?><?php echo $agent->nom ; ?></a>
         <?php   
        }
        ?>
        
       
        
    </body>
</html>