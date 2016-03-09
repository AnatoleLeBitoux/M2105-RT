<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    
    <body>
        <?php
            
$a=2;
$b=2;
$s1='bonjour';
$s2=' anatole ';

echo('a='.$a.' et b= '.$b);
     echo ('la addition de a et b donne '. $a + $b ."<br>");
     echo ('la soustraction de a et b donne'.$a - $b."<br>");
     echo ('la multiplication de a et b donne'.$a * $b."<br>" );
     echo ('la division de a et b donne'.$a / $b."<br>") ;
     echo ('le modulo de a et b donne'.$a % $b."<br>") ;
     echo ('l inverse de a est '.- $a ."<br>");
     echo ('concaténation :'.$s1 . $s2 ."<br>");
     echo ('affectation concaténante'.$s1 .= $s2."<br>" );
        ?>

    </body>
</html>
