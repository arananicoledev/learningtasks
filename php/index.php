<html>
    <head>
        <title>my web page</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="header">

            </div>
            <div class="main-navigation">
                <a href="index.php">Home</a> /
                <a href="index.php?page="about_us">About us</a> /
                <a href="index.php?page="mission-vision">Mission and Vision</a> /
                <a href="index.php?page=gallery">Gallery</a> /
            </div>
            <div class="container">
            <?php
                switch(@$_GET["page"])
                {
                    case "about_us":
                        include("about_us.php");
                        break;
                    case "mission-vision":
                        include("mission-vision,php");
                        break;
                    default:
                        include("home.php");
                        break;
                }
            ?>
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>
                
