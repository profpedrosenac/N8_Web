<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        .imagem{
            height: 100px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <?php include_once('_topo.php')?>
        </div>
        <div class="row">
            <div class="col-sm-12" id="menu" style="height: 55px; background-color: yellow; ">
            </div>
        </div>
        <div class="row" id="conteudo">
            <?php
                include_once('conexao.php');

                $sql = $conn->query('select * from usuario where id_usuario='.$_GET['id']);

                foreach ($sql as $row)
                {
                    echo
                    "
                    <div class='col-sm-3 text-center p-3'>
                        <img src='$row[6]' class='w-100'>
                    </div>
                    <div class='col-sm-9 p-3'>
                        <h3>Id: $row[0]</h3>
                        <h3>Nome: $row[1]</h3>
                        <h3>Data Nascimento: $row[2]</h3>
                        <h3>Usuário: $row[4]</h3>
                        <h3>Observação: $row[7]</h3>
                        <h3>Status: $row[8]</h3>
                    </div>
                    ";
                }
            ?>
        </div>
        <div class="row">
            <?php include_once('_rodape.php')?>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>