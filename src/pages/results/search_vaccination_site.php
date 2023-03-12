<!DOCTYPE html>
<html>

<body>

    <head>
        <title>Search Vaccination Site Tables</title>
    </head>

    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Site Name</th><th>Street</th><th>City</th><th>State</th><th>Zipcode</th><tr>";

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
        $sth = $dbh->prepare('SELECT * FROM vaccination_site where name = ?');
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