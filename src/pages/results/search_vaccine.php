<!DOCTYPE html>
<html>

<body>

    <head>
        <title>Search Vaccine Tables</title>
    </head>

    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Scientific Name</th><th>Disease Treated</th><th>Number of doses</th><tr>";

    class TableRows extends RecursiveIteratorIterator
    {
        function __construct($it)
        {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current()
        {
            return "<td style='width: 150px; border: 1px solid black;'>" . parent::current() . "</td>";
        }

        function beginChildren()
        {
            echo "<tr>";
        }

        function endChildren()
        {
            echo "</tr>" . "\n";
        }
    }

    require("../../include_files/connDB.php");

    $search_subject = $_POST["search_subject"];

    try {
        $sth = $dbh->prepare('SELECT * FROM vaccine where scientific_name = ?');
        $sth->execute(array($search_subject));

        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);

        foreach (new TableRows(new RecursiveArrayIterator($sth->fetchAll())) as $k => $v) {
            echo $v;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    ?>

    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>