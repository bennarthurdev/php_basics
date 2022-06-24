<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //constantes para trabalhar nos parametros
        $SEPARADOR = " ";
        $STRING = "Uma string do banco de dados";
        
        //str_split_ Retorna um array de caracteres
        $resultado = str_split($STRING); //Vector with characters
        echo($resultado[0].'<BR>');//character

        //explode: retorna um array com strings, separadas conforme os parâmetros indicados
        $newResultado = explode($SEPARADOR, $STRING);
        echo($resultado[0].$resultado[1]." ".$newResultado[5]."<BR>");
        
        //implode: retorna 
        
        $str = implode(" - " , $newResultado);
        echo($str)
        
        if () {
            # code...
        }
        
        
        //$SUPERVARS?


        
    ?>
</body>
</html>