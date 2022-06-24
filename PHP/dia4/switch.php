<html>
    <head></head>
    <body>
    <?php
    $choose = $_GET["user_choose"];
    switch($choose){
        case "mobile":
            echo("mobile mode!");
            break;
        case "desktop":
            echo("desktop mode!");
            break;
        default:
            echo "<H1>ERROR 404</H1><br><p>Default mode have be accioned, because no url request mode has choosed!</p>";
            break;
        }
    ?>


    </body>
</html>