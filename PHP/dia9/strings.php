<html>
    <head>

    </head>
    <body>
        
    <?php
    //strpos -> retorna a posição
    //substr -> copia uma string de uma posição até uma determinada
    //str_replace -> substitue uma substring por outra
    //chr -> recebe o código ASCII e retorna o caractere procurado
    //strtolower, strtoupper , ucfirst <LOWER, UPPER AND CAPITALIZE>
    //strrev -> inverte a string

    /* 
    *O código hash é gerado a partir de algoritmos conhecidos como one-way,
    as funções a seguir retornam o código hash da string informada como parâmetro:
        ->crypt(<str>)
        ->shal(<>/str)
        ->md5(<str>)
    */

    $my_str = 'Hello World!';
    
    echo (substr($my_str , strpos($my_str , 'H'), strpos($my_str , 'o')+1));
    echo('<br><h2>');
    echo (str_replace('World' , 'Benn Arthur' , $my_str). '</h2>');
    ?>
    </body>
    </html>