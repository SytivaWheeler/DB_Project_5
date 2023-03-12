<!DOCTYPE html>
<html>

<body>
    <title>Update Takes</title>
    <h1>Update Taking Vaccine Table</h1>

    <?php

    $column = $_POST["column"];
    $update_id =  $_POST["update_id"];
    $search_id1 = $_POST["search_id1"];
    $search_id2 = $_POST["search_id2"];
    $search_id3 = $_POST["search_id3"];

    require("../../include_files/connDB.php");

    switch ($column) {
        case "id":
            try {
                $sth = $dbh->prepare('UPDATE takes SET patient_ID=? where patient_ID = ? AND site_name=? AND scientific_name=?');
                $sth->execute(array($update_id, $search_id1, $search_id2, $search_id3));
                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                if ($e->getCode() == 22018) {
                    echo 'Wrong type for that attribute. Did you select the right attribute to update?';
                } else{
                    echo "Error: " . $e->getMessage();
                }
            }
            break;
        case "site_name":
            try {
                $sth = $dbh->prepare('UPDATE takes SET site_name=? where patient_ID = ? AND site_name=? AND scientific_name=?');
                $sth->execute(array($update_id, $search_id1, $search_id2, $search_id3));
                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                if ($e->getCode() == 22018) {
                    echo 'Wrong type for that attribute. Did you select the right attribute to update?';
                } else{
                    echo "Error: " . $e->getMessage();
                }
            }
            break;
        case "scientific_name":
            try {
                $sth = $dbh->prepare('UPDATE takes SET scientific_name=? where patient_ID = ? AND site_name=? AND scientific_name=?');
                $sth->execute(array($update_id, $search_id1, $search_id2, $search_id3));
                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                if ($e->getCode() == 22018) {
                    echo 'Wrong type for that attribute. Did you select the right attribute to update?';
                } else{
                    echo "Error: " . $e->getMessage();
                }
            }
            break;
    }
    ?>

    <h2>Update finished</h2>
    <p>Make sure the all of the attributes being updated exist in their respective tables already!</p>
    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>