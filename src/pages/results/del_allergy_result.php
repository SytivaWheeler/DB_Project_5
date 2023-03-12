<!DOCTYPE html>
<html>
<title>Deletion page</title>

<h1>Deletion Results</h1>


<?php
require("../../include_files/connDB.php");


$del_subject1 = $_POST["del_subject1"];
$del_subject2 = $_POST["del_subject2"];

$sth = $dbh->prepare('DELETE FROM allergy WHERE patient_ID =? AND allergy=?');
$sth->execute(array($del_subject1, $del_subject2));

?>

<h2>Deletion finished</h2>
<p>If your deleted value existed in the table previously, it should now be deleted from the table</p>
<h2>Check out the <a href="../display_allergy.php">Allergy</a> table here!</h2>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>

</html>