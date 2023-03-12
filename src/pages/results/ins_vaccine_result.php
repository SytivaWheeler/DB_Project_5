<html>
    <body>
        <h1>Insertion Complete</h1>
        <h2>Check out the <a href ="../display_vaccine.php">vaccine</a> database for your insertion!</h2>
<?php
require("../../include_files/connDB.php");

$scientific_name = $_POST["scientific_name"];
$disease = $_POST["disease"];
$num_doses = $_POST["num_doses"];

$sth = $dbh->prepare('INSERT INTO vaccine (scientific_name,disease,num_doses) VALUES (?,?,?)');
$sth->execute(array($scientific_name,$disease,$num_doses));

?>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>
</html>