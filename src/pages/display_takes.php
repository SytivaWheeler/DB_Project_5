<!DOCTYPE html>
<html>

<body>
    <p>Return to <a href="../index.php">homepage</a></p>

    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Vaccine Site Name</th><th>Scientific Name</th><tr>";

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

        $sql = "SELECT * FROM takes";
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