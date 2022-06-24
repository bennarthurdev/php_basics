<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
    //$variable = "myvar";//name of variable
    //$$variable = 61;//value of variable
    //is equal to $myvar = 61
    /*isset function can be used by rerturn:
    True: if variable is defined
    False: if variable is undefined
    See the example:
    */
    if (isset($myvar)) //out: False
        echo "The variable $myvar are defined<br>";
    //$myvar = "";
    //$myvar_2 = Null;
    if (isset($myvar))//out:True
        echo "The variable $myvar are defined <br>";
    if (isset($myvar_2))//out:True
        echo "The variable $myvar_2 are defined";

    ?>
</body>
</html>