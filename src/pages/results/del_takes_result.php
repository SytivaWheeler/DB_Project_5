<!DOCTYPE html>
<html>
<title>Deletion page</title>

<h1>Deletion Results</h1>

<?php
require("../../include_files/connDB.php");

$del_subject1 = $_POST["id"];
$del_subject2 = $_POST["site_name"];
$del_subject3 = $_POST["scientific_name"];

$sth = $dbh->prepare('DELETE FROM takes WHERE patient_ID =? AND site_name =? AND scientific_name =?');
$sth->execute(array($del_subject1,$del_subject2,$del_subject3));

?>

<h2>Deletion finished</h2>
<p>If your deleted value existed in the table previously, it should now be deleted from the table</p>
<h2>Check out the <a href="../display_takes.php">Takes</a> table here!</h2>
<p>Return to <a href="../../index.php">homepage</a></p>

</body>
</html>