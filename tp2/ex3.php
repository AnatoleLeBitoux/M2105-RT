<?php
include 'functions.php';

getHeader(true , 'exercice 3');
?>
<form action="ex2val.php" method="post">
    <fieldset>
        <legend>Question 1 :<br>-Quel est votre navigateur favori</legend>
        <ul>
            <li><input type="radio" value="Chrome" name="browser">Chrome</li>
            <li><input type="radio" value="FireFox" name="browser">FireFox</li>
            <li><input type="radio" value="Opera" name="browser">Opera</li>
            <li><input type="radio" value="IE" name="browser">IE</li>
            <li><input type="radio" value="autre" name="browser">autre</li><br>
            <input type="button" value="soumettre" class="btn btn-default" name=""bouton">
        </ul>

    </fieldset>
</form>

<?php getFooter();