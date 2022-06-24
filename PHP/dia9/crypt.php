<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>    
    <?php
    
    //senha cadastrada
    $password = 'senhainformadanoform';
    //armazenar senha segura
    $DataBaseValue = random_bytes($password);
    //exibir codigo hash da senha
    echo($DataBaseValue);


    //autenticacao do usuario
    /*$passwordLogin = 'senhainformadanoform';
    if (crypt($passwordLogin) == $DataBaseValue)
    {
        echo('Login realizado com sucesso!');
    }  */
    ?>
    </body>
</html>