<!DOCTYPE html>
<html>
    <body>
        <h1>Insertion Results</h1>
<?php
require("../../include_files/connDB.php");

$id = $_POST["id"];
$allergy = $_POST["allergy"];

try{
    $sth = $dbh->prepare('INSERT INTO allergy (patient_ID,allergy) VALUES (?,?)');
    $sth->execute(array($id, $allergy));
    echo 'Insert Successful!';
}catch(PDOException $e){
    if ($e->getCode() == 23000) {
        echo 'Foreign key error. Make sure the values you are trying to insert as 
        ID exists in the patient table already!';
    }
}


?>
<h3>Check out the <a href ="../display_allergy.php">Allergy</a> database for your insertion!</h3>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>
</html>