<!DOCTYPE html>
<html>

<head>
    <title>Insert Patient Records</title>
</head>

<body>
    <h1>Insert/Delete patient records</h1>
    <p>Here, you can insert or delete records from this table.</p>

    <h2>Insert a record</h2>

    <form action="results/ins_patient_result.php" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input class="form-control" type="number" name="id" min=1 max=99999 id="id" required />
        </div>
        <div class="form-group">
            <label for="f_name">First Name:</label>
            <input class="form-control" type="text" name="f_name" id="f_name" required minlength=1 maxlength=15 size="15" pattern="^[a-zA-ZäöüÄÖÜ-]*$" />
        </div>
        <div class="form-group">
            <label for="m_initial">Middle Initial:</label>
            <input class="form-control" type="text" name="m_initial" id="m_initial" maxlength="1" size="1" pattern="^[a-zA-Z]*$" />
        </div>
        <div class="form-group">
            <label for="l_name">Last Name:</label>
            <input class="form-control" type="text" name="l_name" id="l_name" required minlength=1 maxlength=15 size="15" pattern="^[a-zA-ZäöüÄÖÜ-]*$" />
        </div>
        <div class="form-group">
            <label for="DOB">Date of Birth:</label>
            <input class="form-control" type="date" min="1900-01-01" max="2021-11-26" name="DOB" id="DOB" required placeholder="Date in format yyyy-mm-dd" />
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input class="form-control" type="number" name="weight" min="1.00" max="999.00" step="0.1" id="weight" required />
        </div>
        <div class="form-group">
            <input type="submit" name="insert" value="Insert">
    </form>


    <h2>Delete a record</h2>
    <p>Choose which column you would like to use to delete from the table based on a specified condition.</p>
    <p>Ex: If you want to delete every row with someone weighing 300 lbs, then Column: weight, Condition: 300</p>
    <p>Please use hyphens/dashes (-) instead of slashes (/) for dates and ensure what your trying to delete matches the format in the table!</p>

    <form action="results/del_patient_result.php" method="POST">
    <label for="Column">Delete rows using this column:</label>
        <select name="Column" required>
            <option value='id'>ID</option>
            <option value='f_name'>First Name</option>
            <option value='m_initial'>Middle Initial</option>
            <option value='l_name'>Last Name</option>
            <option value='DOB'>Date of Birth</option>
            <option value='weight'>Weight</option>
        </select>
        <div class="form-group">
            <label for="del_subject">Delete rows with this condition:</label>
            <input class="form-control" type="text" name="del_subject" id="del_subject" required pattern="^[a-zA-Z0-9äöüÄÖÜ.-]*$" />
        </div>
        <div class="form-group">
            <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Search for records</h2>
    <p>Choose options such that it makes a search query similar to this: ID < 3</p>
    <p>The ID column is used for this search.</p>

    <form action="results/search_patient.php" method="POST">
        <label for="sign_select"> ID </label>
        <select name="signs" id="sign_select">
                <option value=">">></option>
                <option value="=">=</option>
                <option value="<"><</option>
        </select>
        <div class="form-group">
            <label for="search_subject">Search table with this condition:</label>
            <input class="form-control" type="number" name="search_subject" id="search_subject" min=1 max=99999 id="id" required />
        </div>
        <div class="form-group">
            <input type="submit" value="Search">
    </form>

    <h2>Update records</h2>
    <form action="results/update_patient.php" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input class="form-control" type="number" name="id" min=1 max=99999 id="id" required />
        </div>
        <div class="form-group">
            <label for="f_name">First Name:</label>
            <input class="form-control" type="text" name="f_name" id="f_name" required minlength=1 maxlength=15 size="15" pattern="^[a-zA-ZäöüÄÖÜ-]*$" />
        </div>
        <div class="form-group">
            <label for="m_initial">Middle Initial:</label>
            <input class="form-control" type="text" name="m_initial" id="m_initial" maxlength="1" size="1" pattern="^[a-zA-Z]*$" />
        </div>
        <div class="form-group">
            <label for="l_name">Last Name:</label>
            <input class="form-control" type="text" name="l_name" id="l_name" required minlength=1 maxlength=15 size="15" pattern="^[a-zA-ZäöüÄÖÜ-]*$" />
        </div>
        <div class="form-group">
            <label for="DOB">Date of Birth:</label>
            <input class="form-control" type="date" min="1900-01-01" max="2021-11-26" name="DOB" id="DOB" required placeholder="Date in format yyyy-mm-dd" />
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input class="form-control" type="number" name="weight" min="1.00" max="999.00" step="0.1" id="weight" required />
        </div>
        <div class="form-group">
            <label for="search_id">ID of patient Record You Want To Be Updated:</label>
            <input class="form-control" type="number" name="search_id" min=1 max=99999 id="search_id" required />
        </div>
        <div class="form-group">
            <input type="submit" name="insert" value="Insert">
    </form>
    
    <p>Return to <a href="../index.php">homepage</a></p>
</body>

</html>