<!DOCTYPE html>
<html>
    <body>
        <h1>Insertion Complete</h1>
        <h2>Check out the <a href ="../display_vaccination_site.php">Vaccination Site</a> database for your insertion!</h2>
<?php
require("../../include_files/connDB.php");

$site_name = $_POST["site_name"];
$addr_street = $_POST["addr_street"];
$addr_city = $_POST["addr_city"];
$addr_state = $_POST["addr_state"];
$addr_zip = $_POST["addr_zip"];

$sth = $dbh->prepare('INSERT INTO vaccination_site (name,addr_street,addr_city,addr_state,addr_zip) VALUES (?,?,?,?,?)');
$sth->execute(array($site_name,$addr_street,$addr_city,$addr_state,$addr_zip));

?>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>
</html>
