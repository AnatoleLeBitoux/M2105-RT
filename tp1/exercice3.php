<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    <body>
        <?php

    
    function createHTMLTable ($nblignes, $nbcolonnes){
        echo "<table border='1'>";
        for ($i=0 ; $i<$nblignes ; $i++){
            echo"<tr>";
            for ($j=0 ; $j<$nbcolonnes ; $j++){
                echo"<td>{$i}-{$j}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    

if(array_key_exists("nblignes", $_GET))
    createHTMLTable ($_GET["nblignes"],$_GET["nbcolonnes"]);
//ajouter ?nblignes=5&nbcolonnes=2 pour passer en paramétres
   ?>

    </body>
</html>