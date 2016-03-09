<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>
<body>
<h1>creation tableau</h1>*
<div>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
    <input name="nblignes" id="nblignes" type="number" value="<?php echo $_POST['nblignes']; ?>"/>
    <input name="nbcolonnes" id="nbcolonnes" type="number" value="<?php echo $_POST['nbcolonnes']; ?>"/>
    <input value="Créer le tableau" type="submit"/>
    </form>
</div>
<?php
function createHTMLTable($nblignes,$nbcolonnes){
        echo "<table border='1'>";
        for ($i=0;$i<$nblignes;$i++){
            echo "<tr>";
            for ($j=0 ; $j<$nbcolonnes ; $j++){
                echo"<td>{$i}-{$j}</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
}



if(array_key_exists("nblignes", $_POST))
createHTMLTable ($_POST["nblignes"],$_POST["nbcolonnes"]);
//ajouter ?nblignes=5&nbcolonnes=2 pour passer en paramétres
?>

</body>
</html>