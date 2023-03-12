<!DOCTYPE html>
<html>
<title>Deletion page</title>

<h1>Deletion Results</h1>

<?php
require("../../include_files/connDB.php");

$del_subject = $_POST["del_subject"];
$column = $_POST["Column"];

switch ($column) {
    case 'id':
        $sth = $dbh->prepare('DELETE FROM patient WHERE id =?');
        $sth->execute(array($del_subject));
        break;
    case 'f_name':
        $sth = $dbh->prepare('DELETE FROM patient WHERE f_name =?');
        $sth->execute(array($del_subject));
        break;
    case 'm_initial':
        $sth = $dbh->prepare('DELETE FROM patient WHERE m_initial =?');
        $sth->execute(array($del_subject));
        break;
    case 'l_name':
        $sth = $dbh->prepare('DELETE FROM patient WHERE l_name =?');
        $sth->execute(array($del_subject));
        break;
    case 'DOB':
        $sth = $dbh->prepare('DELETE FROM patient WHERE DOB =?');
        $sth->execute(array($del_subject));
        break;
    case 'weight':
        $sth = $dbh->prepare('DELETE FROM patient WHERE weight =?');
        $sth->execute(array($del_subject));
        break;
}
?>
<h2>Deletion finished</h2>
<p>If your deleted value existed in the table previously, it should now be deleted from the table</p>
<h2>Check out the <a href="../display_patient.php">Patient</a> table here!</h2>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>

</html>