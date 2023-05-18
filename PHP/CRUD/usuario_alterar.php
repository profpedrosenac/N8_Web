<?php
include_once('conexao.php');

if($_POST)
{
    $id = $_POST['txtID'];
    $nome = $_POST['txtNome'];
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    $nasc = $_POST['txtNascimento'];
    $img = '';
    $status = $_POST['txtStatus'];
    $obs = $_POST['txtObs'];

    try {
        
        $sql = $conn->prepare("
            update usuario set
                nome_Usuario=:nome_Usuario,
                nascimento_Usuario=:nascimento_Usuario,
                usuario_Usuario=:usuario_Usuario,
                senha_Usuario=:senha_Usuario,
                img_Usuario=:img_Usuario,
                obs_Usuario=:obs_Usuario,
                status_Usuario=:status_Usuario
            where id_usuario=:id_usuario
        ");

        $sql->execute(array(
            ':id_usuario'=>$id,
            ':nome_Usuario'=>$nome,
            ':nascimento_Usuario'=>$nasc,
            ':usuario_Usuario'=>$login,
            ':senha_Usuario'=>$senha,
            ':img_Usuario'=>$img,
            ':obs_Usuario'=>$obs,
            ':status_Usuario'=>$status
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Alterados com sucesso</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:frm_usuario.php');
}
?>

<hr>
<a href="frm_usuario.php">Voltar</a>