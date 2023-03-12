<!DOCTYPE html>
<html>

<body>
    <title>Update Allergy</title>
    <h1>Update Allergy Table</h1>
    <?php

    $column = $_POST["column"];
    $update_id = $_POST["update_id"];
    $search_allergy = $_POST["search_allergy"];
    $search_id = $_POST["search_id"];

    require("../../include_files/connDB.php");
    switch ($column) {
        case "id":
            try {
                $sth = $dbh->prepare('UPDATE allergy SET patient_ID = ? where patient_ID = ? AND allergy=?');
                $sth->execute(array($update_id, $search_id, $search_allergy));
                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            break;
        case "allergy":
            try {
                $sth = $dbh->prepare('UPDATE allergy SET allergy=? where patient_ID = ? AND allergy=?');
                $sth->execute(array($update_id, $search_id, $search_allergy));
                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            break;
    }

    ?>
    <h2>Update finished</h2>
    <p>Make sure the ID of the patient youre updating to exists in the patient table already!</p>
    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>