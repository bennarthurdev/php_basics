<html>
    <head lang="pt-br">
        <meta charset="utf-8">
        <title>Date</title>
    </head>
    <body>
        <?php 
            //set the default timezone to use!
            date_default_timezone_set("America/Sao_Paulo");
            //actual date in format "d-m-y"
            $atual_date =  date("d-m-Y");
            $atual_time = strtotime($atual_date); // with this datatype we can realize math operations like the diference between two dates
          
            //a day have:86400s
            $yesterday_timestamp = $atual_time - 86400;
            //print yesterday in datatype
            echo "Date for yesterday: ".date("d-m-Y" , $yesterday_timestamp);

        ?>
    </body>
</html>
