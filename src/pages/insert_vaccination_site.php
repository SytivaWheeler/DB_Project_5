<!DOCTYPE html>
<html>

<head>
    <title>Insert Vaccination Site Records</title>
</head>

<body>
    <h1>Insert/Delete Vaccination Site records</h1>
    <p>Here, you can insert or delete records from this table.</p>

    <h2>Insert a record</h2>

    <form action="results/ins_vaccination_site_result.php" method="POST">
        <div class="form-group">
            <label for="site_name">Name of site:</label>
            <input class="form-control" type="text" name="site_name" id="site_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_street">Street:</label>
            <input class="form-control" type="text" name="addr_street" id="addr_street" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9.äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_city">City:</label>
            <input class="form-control" type="text" name="addr_city" id="addr_city" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-ZäöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_state">State:</label>
            <input class="form-control" type="text" name="addr_state" id="addr_state" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-ZäöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_zip">Zipcode:</label>
            <input class="form-control" type="number" name="addr_zip" min=1 max=99999 id="addr_zip" required />
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>


    <h2>Delete a record</h2>
    <p>Choose which column you would like to use to delete from the table based on a specified condition.</p>
    <p>Ex: If you want to delete every row with CVS Pharmacy as the site name, then Column: Name of site, Condition: CVS Pharmacy</p>

    <form action="results/del_vaccination_site_result.php" method="POST">
        <select name="Column">
            <option value="site_name">Name of site</option>
            <option value="addr_street">Street</option>
            <option value="addr_city">City</option>
            <option value="addr_state">State</option>
            <option value="addr_zip">Zipcode</option>
        </select>
        <div class="form-group">
            <label for="del_subject">Delete rows with this condition:</label>
            <input class="form-control" type="text" name="del_subject" id="del_subject" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Search for records</h2>
    <p>Choose options such that it makes a search query similar to this: Site name = CVS Pharmacy</p>
            <p>The Vaccination Site Name column is used for this search.</p>
            <form action="results/search_vaccination_site.php" method="POST">
                <div class="form-group">
                    <label for="search_subject">Search table with this condition:</label>
                    <input class="form-control" type="text" name="search_subject" id="search_subject" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Search">
            </form>

    <h2>Update records</h2>
    <form action="results/update_vaccination_site.php" method="POST">
        <div class="form-group">
            <label for="site_name">Name of site:</label>
            <input class="form-control" type="text" name="site_name" id="site_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_street">Street:</label>
            <input class="form-control" type="text" name="addr_street" id="addr_street" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_city">City:</label>
            <input class="form-control" type="text" name="addr_city" id="addr_city" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-ZäöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_state">State:</label>
            <input class="form-control" type="text" name="addr_state" id="addr_state" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-ZäöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <label for="addr_zip">Zipcode:</label>
            <input class="form-control" type="number" name="addr_zip" min=1 max=99999 id="addr_zip" required />
        </div>
        <div class="form-group">
            <label for="search_name">Name of Site of Record You Want To Be Updated:</label>
            <input class="form-control" type="text" name="search_name" id="search_name" minlength=1 maxlength=25 size="25" required pattern="^[a-zA-Z0-9äöüÄÖÜ)( -]*$"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Insert">
    </form>

<p>Return to <a href="../index.php">homepage</a></p>
</body>

</html>