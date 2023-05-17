<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aula 01 de PHP</h1>
    <hr>
    <?php
        echo '<h2>Olá mundo!</h2>';
        echo '<hr>';

        $nome = 'Pedro Legal'; // criando uma variável. $

        //echo $nome;
        echo '<h3>Seu nome é: $nome</h3>';
        echo '<h3>Seu nome é: '.$nome.'</h3>';
        echo "<h3>Seu nome é: $nome</h3>";
       

        $x = 5;
        $y = 56.87;

        var_dump($nome);
        echo '<br>';

        var_dump($x);
        echo '<br>';
        
        var_dump($y);
        echo '<br>';
        
        $nomes = ['joão', 'maria', 'josefa','matuzalem'];
        var_dump($nomes);
        
        echo '<br>';
        echo $nomes[2];

    ?>
</body>
</html>