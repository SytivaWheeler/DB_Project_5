<!DOCTYPE html>
<html>

<body>

    <head>
        <title>Search Patient Tables</title>
    </head>

    <?php

    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Middle Initial</th><th>Lastname</th><th>Date of Birth</th><th>Weight</th><tr>";

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

    $sign = $_POST["signs"];
    $search_subject = $_POST["search_subject"];

    switch ($sign) {
        case '=':

            try {
                $sth = $dbh->prepare('SELECT * FROM patient where ID = ?');
                $sth->execute(array($search_subject));

                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);

                foreach (new TableRows(new RecursiveArrayIterator($sth->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            break;
        case '>':
            try {
                $sth = $dbh->prepare('SELECT * FROM patient WHERE ID > ?');
                $sth->execute(array($search_subject));

                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);

                foreach (new TableRows(new RecursiveArrayIterator($sth->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            break;
        case '<':

            try {
                $sth = $dbh->prepare('SELECT * FROM patient WHERE ID < ?');
                $sth->execute(array($search_subject));

                $result = $sth->setFetchMode(PDO::FETCH_ASSOC);

                foreach (new TableRows(new RecursiveArrayIterator($sth->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            break;
    }
    ?>

    <p>Return to <a href="../../../index.php">homepage</a></p>
</body>

</html>