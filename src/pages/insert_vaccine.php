<!DOCTYPE html>
<html>

<head>
    <title>Insert Vaccine Records</title>
</head>

<body>
    <h1>Insert/Delete vaccine records</h1>
    <p>Here, you can insert or delete records from this table.</p>

    <h2>Insert a record</h2>

    <form action="results/ins_vaccine_result.php" method="POST">
        <div class="form-group">
            <label for="scientific_name">Scientific Name:</label>
            <input class="form-control" type="text" name="scientific_name" id="scientific_name" required minlength=1 maxlength=25 size="25" pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <label for="disease">Disease:</label>
            <input class="form-control" type="text" name="disease" id="disease" required minlength=1 maxlength=25 size="25" pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <label for="num_doses">Number of doses:</label>
            <input class="form-control" type="number" name="num_doses" required min="1" max="20" id="num_doses" />
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>

    <h2>Delete a record</h2>
    <p>Choose which column you would like to use to delete from the table based on a specified condition.</p>
    <p>Ex: If you want to delete every row with a vaccine named Daptacel, then Column: Scientific Name, Condition: Daptacel</p>

    <form action="results/del_vaccine_result.php" method="POST">

        <select name="Column">
            <option value="scientific_name">Scientific Name</option>
            <option value="disease">Disease</option>
            <option value="num_doses">Number of Doses</option>
        </select>

        <div class="form-group">
            <label for="del_subject">Delete rows with this condition:</label>
            <input class="form-control" type="text" name="del_subject" id="del_subject" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Search for records</h2>
    <p>Choose options such that it makes a search query similar to this: Scientific Name = Daptacel</p>
            <p>The Scientific Name column is used for this search.</p>
            <form action="results/search_vaccine.php" method="POST">
                <div class="form-group">
                    <label for="search_subject">Search table with this condition:</label>
                    <input class="form-control" type="text" name="search_subject" id="search_subject" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Search">
            </form>

<h2>Update records</h2>
<form action="results/update_vaccine.php" method="POST">
        <div class="form-group">
            <label for="scientific_name">Scientific Name:</label>
            <input class="form-control" type="text" name="scientific_name" id="scientific_name" required minlength=1 maxlength=25 size="25" pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <label for="disease">Disease:</label>
            <input class="form-control" type="text" name="disease" id="disease" required minlength=1 maxlength=25 size="25" pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <label for="num_doses">Number of doses:</label>
            <input class="form-control" type="number" name="num_doses" required min="1" max="20" id="num_doses" />
        </div>
        <div class="form-group">
            <label for="search_name">Scientific Name of Record You Want To Be Updated:</label>
            <input class="form-control" type="text" name="search_name" id="search_name" required minlength=1 maxlength=25 size="25" pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>

<p>Return to <a href="../index.php">homepage</a></p>
</body>

</html>