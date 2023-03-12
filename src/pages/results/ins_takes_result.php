<!DOCTYPE html>
<html>

<body>
    <h1>Insertion Results</h1>
    <?php
    require("../../include_files/connDB.php");

    $id = $_POST["id"];
    $site_name = $_POST["site_name"];
    $scientific_name = $_POST["scientific_name"];

    try {
        $sth = $dbh->prepare('INSERT INTO takes (patient_ID,site_name,scientific_name) VALUES (?,?,?)');
        $sth->execute(array($id, $site_name, $scientific_name));
        echo 'Insert Successful!';
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo 'Foreign key error. Make sure the values you are trying to insert as 
            ID, Name of Site, and Scientific Name of Vaccine all exist in patient, 
            vaccine site, and vaccine tables respectively!';
        }
    }
    ?>
    <h2>See the <a href="../display_takes.php">Taking Vaccine</a> table here!</h2>
    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>