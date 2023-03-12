<!DOCTYPE html>
<html>
<title>Deletion page</title>

<h1>Deletion Results</h1>

<?php
require("../../include_files/connDB.php");

$del_subject = $_POST["del_subject"];
$column = $_POST["Column"];

switch ($column) {
    case 'site_name':
        $sth = $dbh->prepare('DELETE FROM vaccination_site WHERE name =?');
        $sth->execute(array($del_subject));
        break;
    case 'addr_street':
        $sth = $dbh->prepare('DELETE FROM vaccination_site WHERE addr_street =?');
        $sth->execute(array($del_subject));
        break;
    case 'addr_city':
        $sth = $dbh->prepare('DELETE FROM vaccination_site WHERE addr_city =?');
        $sth->execute(array($del_subject));
        break;
    case 'addr_state':
        $sth = $dbh->prepare('DELETE FROM vaccination_site WHERE addr_state =?');
        $sth->execute(array($del_subject));
        break;
    case 'addr_zip':
        $sth = $dbh->prepare('DELETE FROM vaccination_site WHERE addr_zip =?');
        $sth->execute(array($del_subject));
        break;
}
?>

<h2>Deletion finished</h2>
<p>If your deleted value existed in the table previously, it should now be deleted from the table</p>
<h2>Check out the <a href="../display_vaccination_site.php">Vaccination Site</a> table here!</h2>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>

</html>