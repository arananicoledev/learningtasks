<html>
    <head>
        <title>Activity 02</title>
    </head>
    <body>
        <?php
        if (isset($_POST["btnSubmit"])){
            echo "the name you entered is <strong>" .$_POST["txtName"]."</strong><br";
            echo "<a href+'activity_-2.php'>Back</a>";
        } else {
        ?>
        <form method="post" action="activity_02.php">
            <label>Name</label><br>
            <input type="text" name="txtName" id="txtName" placeholder="name...">
            <input type="submit" name="btnSubmit" value="Submit"/>
    </form>
    <?php } ?>
    </body>
</html>
