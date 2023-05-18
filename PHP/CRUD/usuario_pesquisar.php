<?php

include_once('conexao.php');

if($_POST)
{
    $id = $_POST['txtID'];

    $sql = $conn->query('select * from usuario where id_usuario ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) {
            echo "<p>ID: $row[0]</p>";
            echo "<p>Nome: $row[1]</p>";
            echo "<p>Data Nascimento: $row[2]</p>";
            echo "<p>Data Cadastro: $row[3]</p>";
            echo "<p>Login: $row[4]</p>";
            echo "<p>Senha: $row[5]</p>";
            echo "<p>Imagem: $row[6]</p>";
            echo "<p>Observação: $row[7]</p>";
            echo "<p>Status: $row[8]</p>";

        }
    }
    else
    {
        echo '<p>Usuário não existe</p>';
    }
}
else
{
    header('Location:frm_usuario.php');
}
?>
<hr>
<a href="frm_usuario.php">Voltar</a>