<?php
include 'functions.php';

getHeader(true , 'exercice 1');

?>
<form class="form-inline" action="ex1Validation.php" method="post">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input class="form-control" type="text"  />
    </div>
</form>
<?php getFooter();

