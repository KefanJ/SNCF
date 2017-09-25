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
        <p><?php echo $agent->nom; ?>" ><br>  <?php echo $agent->prenom ; ?>></p>
         <?php   
        }
        ?>
        
       
        
    </body>
</html>