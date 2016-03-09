<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    
    <body>
        <?php

function addition($a, $b){
    return $a + $b;}

function soustraction($a, $b){
    return $a - $b;}

function multiplication($a, $b){
    return $a * $b;}

function division($a , $b){
    return $a / $b;}

function operation($a, $b, $op){
    return $op($a, $b);}

echo(operation(5, 4, 'soustraction')); 
        
        ?>

    </body>
</html>
