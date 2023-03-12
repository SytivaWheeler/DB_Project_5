<!DOCTYPE html>
<html>

<body>
    <title>Update Patient</title>
    <h1>Update Vaccination Sites Table</h1>
    <?php

    $site_name = $_POST["site_name"];
    $addr_street = $_POST["addr_street"];
    $addr_city = $_POST["addr_city"];
    $addr_state = $_POST["addr_state"];
    $addr_zip = $_POST["addr_zip"];
    $search_name = $_POST["search_name"];

    require("../../include_files/connDB.php");
    try {
        $sth = $dbh->prepare('UPDATE vaccination_site SET name=?,addr_street=?,addr_city=?,addr_state=?,addr_zip=? where name = ?');
        $sth->execute(array($site_name, $addr_street, $addr_city, $addr_state, $addr_zip, $search_name));
        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
    <h2>Update finished</h2>
    <p>Make sure the Site Name of the Site youre updating to exists in the Vaccination Site table already!</p>
    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>