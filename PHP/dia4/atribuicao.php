<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
    <style>
    input{
        width:700px;
    }

    </style>
</head>
<body>
    <?php 
    #aplique 10% de desconto no preço de um produto
    $value = $_GET['a'];
    echo "O preço do produto é ".$value;
    $value -= $value*0.1;
    echo "<br><input type='text' placeholder='O preço do produto com 10% de desconto é $value'>:";    
    #pré-incremento
    echo '<br>'.++$value;
    #pós-incremento
    echo '<br>'.$value++;
    echo '<br>'.$value;

    #variavéis referenciadas
    echo "<br><H2 style='color:blue;'>Variáveis referenciadas</H2>";
    $a = 3;
    $b = &$a;
    $b = 8;
    echo "<br>A vale: $a e B vale: $b ";
    /* 
    No momento em que $b é referenciada por a, as alterações nela feitas, são também realizadas em $a;
    */
    
    ?>




</body>
</html>