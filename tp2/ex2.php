<?php
include 'functions.php';
if (isset($_COOKIE["user"]))
    header("location:ex2val.php");
getHeader(true , 'exercice 2');
?>
    <form class="form-inline" action="ex2val.php" method="post">
        <div class="form-group">
            <input class="form-control" type="text" value="Nom"  name="user"/>
            <input type="submit" class="btn btn-default" value="submit" /></br>
            <input type="checkbox" class="checkbox" name="checkbox" ><label>rester connecter</label>
        </div>
    </form>

<?php getFooter();

