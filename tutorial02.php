<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="utf-8">
        <title>TUTORIAL02</title>
        <script>
            /*JS Script*/
        </script>
        <style>
            /*CSS Stylesheet */
        </style>
    </head>
    <body>
        <div>
        <?php 
        /*PHP Script*/
        $x = 5; #global scope
        $y = 21; #global scope

        function Sum(){
            global $x,$y; //global variables in local scope
            $y = $x + $y;
        }

        Sum()#call function Sum()
        
        ?>
        </div>
        <div>
        <?php
        /*NOTES
        #PHP also stores all global variables in an array called $GLOBALS[index]
        #index receive the of the variable, and the value of the elemenent in this index, is the value of the global variable.
        #Example: 
        */
        $x = "Element x value";
        $y = "Element y value";

        function test(){
            echo $GLOBALS['x'] . "</br>";//['x'] equal to ['y']
            echo $GLOBALS['y'] . "</br>"; //['y'] - > index is the global variable
        }
        test()//call test function
        ?>
        <?php 
        #when a function is completed/executed, all of its variables are deleted
        #if we want a local variable NOT to be deleted
        #we can be use:
        function LocalVariable(){
            static $y = 5;
            echo $y;
            $y++; // y = y + 1 
        }
        LocalVariable(); //out: 5
        LocalVariable(); //out: 6
        ?>
        </div>
    </body>
</html>