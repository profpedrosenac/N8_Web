<?php

include_once('conexao.php');

$idUsuario='';
$nomeUsuario='';
$nascimentoUsuario='';
$cadastroUsuario='';
$loginUsuario='';
$senhaUsuario='';
$imagemUsuario='';
$obsUsuario='';
$statusUsuario='';

if($_POST)
{
    $id = $_POST['txtID'];

    $sql = $conn->query('select * from usuario where id_usuario ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) {

            $idUsuario=$row[0];
            $nomeUsuario=$row[1];
            $nascimentoUsuario=$row[2];
            $cadastroUsuario=$row[3];
            $loginUsuario=$row[4];
            $senhaUsuario=$row[5];
            $imagemUsuario=$row[6];
            $obsUsuario=$row[7];
            $statusUsuario=$row[8];

            // echo "<p>ID: $row[0]</p>";
            // echo "<p>Nome: $row[1]</p>";
            // echo "<p>Data Nascimento: $row[2]</p>";
            // echo "<p>Data Cadastro: $row[3]</p>";
            // echo "<p>Login: $row[4]</p>";
            // echo "<p>Senha: $row[5]</p>";
            // echo "<p>Imagem: $row[6]</p>";
            // echo "<p>Observação: $row[7]</p>";
            // echo "<p>Status: $row[8]</p>";

        }
    }
    else
    {
        echo '<p>Usuário não existe</p>';
    }
}

?>
