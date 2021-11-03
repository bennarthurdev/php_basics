<!--TUTORIAL 03-->
<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <title>TUTORIAL 03</title>
        <meta charset="utf-8">
        <style >
            /*CSS stylesheet */
        </style>
        <script>
            /*JS scripts*/
        </script>
    </head>
    <body>
        <!--ECHO -->
        <?php
        $txt1 = "Learn PHP";
        $txt2 = "PHP is very fun";
        $x = 10;
        $y = 20;
        echo("<h2>". $txt1 . "</h2>");//notice that the text can contain HTML markup
        echo "Study PHP at " . $txt2 . "<br>" , "hello world<br>";
        echo $x + $y;
        //echo can be used with or withou parentheses
        //echo is marginally faster than print
        ?>
        <!--Print -->
        <?php 
        // print or print()
        $txt1 = "an error";
print("<h2>print ". $txt1 ."</h2>"  /* ,"hello world<br>" make an error, because print can take one argument*/);
        ?>
    </body>
</html>