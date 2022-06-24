<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> 
        <title>Tutorial5</title>
    </head>
    <body>

    <?php 
    echo strlen("Jesus e´ lindo") , "<br>";//Out: length of a string
    echo str_word_count("Jesus e´ lindo, lindo,lindo") , "<br>";//Out:num of words in a string
    echo strrev("Jesus e lindo") , "<br>";//Out: function reverses a string
    echo strpos("Jesus e´ lindo" , "lindo") , "<br>";//Out: returns the character position of the first mach of argument in the string
    ?>
    </body>
</html>