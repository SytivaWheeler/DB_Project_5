<!DOCTYPE html>
<html>

<head>
    <title>Insert Allergy Records</title>
</head>

<body>
    <h1>Insert/Delete Allergy records</h1>
    <p>Here, you can insert or delete records from this table.</p>

    <h2>Insert a record</h2>

    <form action="results/ins_allergy_result.php" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input class="form-control" type="number" name="id" min=1 max=99999 id="id" required />
        </div>
        <div class="form-group">
            <label for="allergy">Allergy:</label>
            <input class="form-control" type="text" name="allergy" id="allergy" required minlength=1 maxlength=25 size="25" pattern ="^[a-zA-ZäöüÄÖÜ -]*$"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>

    <h2>Delete a record</h2>
    <p>Choose which column you would like to use to delete from the table based on a specified condition.</p>
    <p>Ex: If you want to delete a row with someone allergic to Nuts, then ID of record to be deleted: That persons ID, Allergy: Nut</p>

    <form action="results/del_allergy_result.php" method="POST">
    <div class="form-group">
            <label for="del_subject1">Patient ID of Record To Be Deleted:</label>
            <input class="form-control" type="number" name="del_subject1" min=1 max=99999 id="del_subject1" required />
        </div>
        <div class="form-group">
            <label for="del_subject2">Allergy of Record To Be Deleted:</label>
            <input class="form-control" type="text" name="del_subject2" id="del_subject2" required minlength=1 maxlength=25 size="25" pattern ="^[a-zA-ZäöüÄÖÜ -]*$"/>
        </div>
        <div class="form-group">
            <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Search for records</h2>
    <p>Choose options such that it makes a search query similar to this: ID < 3</p>
    <p>The ID column is used for this search.</p>
    <form action="results/search_allergy.php" method="POST">
        <select name="signs">
            <option value=">">></option>
            <option value="=">=</option>
            <option value="<"><</option>
        </select>
        <div class="form-group">
            <label for="search_subject">Search table with this condition:</label>
            <input class="form-control" type="number" name="search_subject" min=1 max=99999 id="search_subject" required />
        </div>
        <div class="form-group">
            <input type="submit" value="Search">
    </form>

    <h2>Update records</h2>
    <form action="results/update_allergy.php" method="POST">
        
        <select name="column">
            <option value="id">ID</option>
            <option value="allergy">Allergy</option>
        </select>
        <div class="form-group">
            <label for="update_id">Value to Update Record to:</label>
            <input class="form-control" type="text" name="update_id" id="update_id" required minlength=1 maxlength=25 size="25" pattern ="^[a-zA-Z0-9äöüÄÖÜ -]*$"/>
        </div>
        <div class="form-group">
            <label for="search_allergy">Allergy of Record To Be Updated:</label>
            <input class="form-control" type="text" name="search_allergy" id="search_allergy" required minlength=1 maxlength=25 size="25" pattern ="^[a-zA-ZäöüÄÖÜ -]*$"/>
        </div>
        <div class="form-group">
            <label for="search_id">Patient ID of Record To Be Updated:</label>
            <input class="form-control" type="number" name="search_id" min=1 max=99999 id="search_id" required />
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>

    <p>Return to <a href="../index.php">homepage</a></p>
</body>

</html>