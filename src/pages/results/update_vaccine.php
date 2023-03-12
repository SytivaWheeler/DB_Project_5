<!DOCTYPE html>
<html>

<body>
    <title>Update Vaccine</title>
    <h1>Update Vaccines Table</h1>
    <?php

    $scientific_name = $_POST["scientific_name"];
    $disease = $_POST["disease"];
    $num_doses = $_POST["num_doses"];
    $search_name = $_POST["search_name"];

    require("../../include_files/connDB.php");
    try {
        $sth = $dbh->prepare('UPDATE vaccine SET scientific_name=?,disease=?,num_doses=? where scientific_name = ?');
        $sth->execute(array($scientific_name, $disease, $num_doses, $search_name));
        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
    <h2>Update finished</h2>
    
    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>