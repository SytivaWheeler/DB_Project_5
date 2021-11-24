<html>
<body>
<h1>Database Connection Test</h1>
<?php
//Enable showing error messages
error_reporting(E_ALL);
ini_set('display_errors', True);

//Connect to the database
require 'connDB.php';

//Example safe handling
$statement = $dbh->prepare("SELECT ? + 1 AS sampleres;");
//run with '5' as the argument. Should return 6.
if($statement->execute([5])){
 $res = $statement->fetchAll();
 print("This should be 6: " . $res[0]["sampleres"]);
}else{
 $err = $statement->errorInfo();
 print("Failed to execute query: ".$err[0].":".$err[1].":".$err[2]);
}
?>
</body>
</html>
