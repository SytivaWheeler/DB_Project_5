<html>
    <body>
        <h1>Insertion Results</h1>

<?php
require("../../include_files/connDB.php");

$id = $_POST["id"];
$f_name = $_POST["f_name"];
$m_initial = $_POST["m_initial"];
$l_name = $_POST["l_name"];
$DOB = $_POST["DOB"];
$weight = $_POST["weight"];

try{
    $sth = $dbh->prepare('INSERT INTO patient (id,f_name,m_initial,l_name,DOB,weight) VALUES (?,?,?,?,?,?)');
    $sth->execute(array($id, $f_name, $m_initial, $l_name, $DOB, $weight));
}catch(PDOException $e){
    if ($e->getCode() == 23000) {
        echo 'Value not inserted due to: Primary Key error. Make sure the values you are trying to insert as 
        ID dont belong to another patient already!';
    }
}

?>
<h2>Check out the <a href ="../display_patient.php">patient</a> table here!</h2>
<p>Return to <a href="../../index.php">homepage</a></p>
</body>
</html>
