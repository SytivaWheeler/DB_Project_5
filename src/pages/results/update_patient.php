<!DOCTYPE html>
<html>

<body>
    <title>Update Patient</title>
    <h1>Update Patients Table</h1>
    <?php

    $id = $_POST["id"];
    $f_name = $_POST["f_name"];
    $m_initial = $_POST["m_initial"];
    $l_name = $_POST["l_name"];
    $DOB = $_POST["DOB"];
    $weight = $_POST["weight"];
    $search_id = $_POST["search_id"];

    require("../../include_files/connDB.php");
    try {
        $sth = $dbh->prepare('UPDATE patient SET ID=?,f_name=?,m_initial=?,l_name=?,DOB=?,weight=? where ID = ?');
        $sth->execute(array($id, $f_name, $m_initial, $l_name, $DOB, $weight, $search_id));
        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <h2>Update finished</h2>
    <p>Make sure the ID of the patient exists in the table already!</p>
    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>