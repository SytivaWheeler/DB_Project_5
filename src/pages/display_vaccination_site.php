<!DOCTYPE html>
<html>

<body>
    <p>Return to <a href="../index.php">homepage</a></p>
    
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

    try {
        require("../include_files/connDB.php");

        $sql = "SELECT * FROM vaccination_site";
        $statement = $dbh->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        foreach (new TableRows(new RecursiveArrayIterator($statement->fetchAll())) as $k => $v) {
            echo $v;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

</body>

</html>