<!DOCTYPE html>
<html>

<head>
    <title>Insert Vaccine Taking Records</title>
</head>

<body>
    <h1>Insert/Delete Vaccine Taking records</h1>
    <p>Here, you can insert or delete records from this table.</p>

    <h2>Insert a record</h2>

    <form action="results/ins_takes_result.php" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input class="form-control" type="number" name="id" min=1 max=99999 id="id" required />
        </div>
        <div class="form-group">
            <label for="site_name">Name of site:</label>
            <input class="form-control" type="text" name="site_name" id="site_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="scientific_name">Scientific Name of Vaccine:</label>
            <input class="form-control" type="text" name="scientific_name" id="scientific_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>


    <h2>Delete a record</h2>
    <p>Ex: If you want to delete a row with someone whose ID is 300, is taking the Prevnar13 vaccine at Main Street Hospital, then enter those values in their respective places.</p>

    <form action="results/del_takes_result.php" method="POST">
    <div class="form-group">
            <label for="id">ID:</label>
            <input class="form-control" type="number" name="id" min=1 max=99999 id="id" required />
        </div>
        <div class="form-group">
            <label for="site_name">Name of site:</label>
            <input class="form-control" type="text" name="site_name" id="site_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="scientific_name">Scientific Name of Vaccine:</label>
            <input class="form-control" type="text" name="scientific_name" id="scientific_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Search for records</h2>
    <p>Choose options such that it makes a search query similar to this: ID < 3</p>
    <p>The ID column is used for this search.</p>
    
    <form action="results/search_takes.php" method="POST">
        <label for= "sign_select"> ID </label>
        <select name="signs" id="sign_select">
            <option value=">">></option>
            <option value="=">=</option>
            <option value="<"><</option>
        </select>
        <div class="form-group">
            <label for="search_subject">Search table with this condition:</label>
            <input class="form-control" type="number" name="search_subject" id="search_subject" min=1 max=99999 required />
        </div>
        <div class="form-group">
            <input type="submit" value="Search">
    </form>

    <h2>Update records</h2>

    <form action="results/update_takes.php" method="POST">
        <select name="column" id="column">
            <option value="id">ID of Patient</option>
            <option value="site_name">Vaccination Site Name</option>
            <option value="scientific_name">Scientific Name of Vaccine</option>
        </select>
        <div class="form-group">
            <label for="update_id">Value to Update to:</label>
            <input class="form-control" type="text" name="update_id" id="update_id" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <label for="search_id1">ID of Patient Record You Want To Be Updated:</label>
            <input class="form-control" type="number" name="search_id1" id="search_id1" min=1 max=99999 required />
        </div>
        <div class="form-group">
            <label for="search_id2">Site Name of Record You Want To Be Updated:</label>
            <input class="form-control" type="text" name="search_id2" id="search_id2" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$" />
        </div>
        <div class="form-group">
            <label for="search_id3">Scientific Name of Vaccine Record You Want To Be Updated:</label>
            <input class="form-control" type="text" name="search_id3" id="search_id3" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>
    
    <p>Return to <a href="../index.php">homepage</a></p>
</body>

</html>