<html>
    <head>
        <title>Activity 02</title>
        <style type="text/css">
            .form control {
                font-familyL: verdana;
            }
            .btn {
                background-color: blue;
                color: white;
            }
            .btn:hover {
                background-color: white;
                color:blue;
            }
        </style>
    </head>
    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First name</label><br>
            <input type="text" class="form-control" name="txtFirstName" placeholder="First Name..."><br>
            <label>Last name</label><br>
            <input type="text" class="form-control" name="txtLastName" placeholder="Last Name..."><br>
            <label>Status</label><br>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            <select><br>
            <label>DOB</label><br>
            <input type="date" class="form-control" name="txtDOB" placeholder="Last Name"><br>
            <label>Address</label><br>
    
            <textarea rows="10" class="form-control"
                    cols="25" name="txtAreaAddress" placeholder="Address..."></textarea><br>
            <input class="btn"  type="Submit" name="btnSubmit" value="Submit" />
            <input class="btn"  type="reset"  value="clear" />
        </form>
    </body>
</html>
