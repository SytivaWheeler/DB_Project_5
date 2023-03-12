<!DOCTYPE html>
<html>
<title>Deletion page</title>

<h1>Deletion Results</h1>

<?php
require("../../include_files/connDB.php");

$del_subject = $_POST["del_subject"];
$column = $_POST["Column"];

switch ($column) {
    case 'scientific_name':
        $sth = $dbh->prepare('DELETE FROM vaccine WHERE scientific_name =?');
        $sth->execute(array($del_subject));
        break;
    case 'disease':
        $sth = $dbh->prepare('DELETE FROM vaccine WHERE disease =?');
        $sth->execute(array($del_subject));
        break;
    case 'num_doses':
        $sth = $dbh->prepare('DELETE FROM vaccine WHERE num_doses =?');
        $sth->execute(array($del_subject));
        break;
}
?>

<h2>Deletion finished</h2>
<p>If your deleted value existed in the table previously, it should now be deleted from the table</p>
<h2>Check out the <a href="../display_vaccine.php">Vaccine</a> table here!</h2>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>

</html>