<?php
include_once('conexao.php');

if($_POST)
{
    $nome = $_POST['txtNome'];
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    $nasc = $_POST['txtNascimento'];
    $img = '';
    $status = $_POST['txtStatus'];
    $obs = $_POST['txtObs'];

    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';

    
    // return; 

    try {

        if(isset($_FILES['txtImg']))
        {
            $img = $_FILES['txtImg'];
        }
        else
        {
            echo 'Erro, a imagem deve ser enviada';
            return;
        }
        
        $sql = $conn->prepare("
            insert into usuario
            (
                nome_Usuario,
                nascimento_Usuario,
                usuario_Usuario,
                senha_Usuario,
                img_Usuario,
                obs_Usuario,
                status_Usuario
            )
            values
            (
                :nome_Usuario,
                :nascimento_Usuario,
                :usuario_Usuario,
                :senha_Usuario,
                :img_Usuario,
                :obs_Usuario,
                :status_Usuario
            )
        ");

        $sql->execute(array(
            ':nome_Usuario'=>$nome,
            ':nascimento_Usuario'=>$nasc,
            ':usuario_Usuario'=>$login,
            ':senha_Usuario'=>$senha,
            ':img_Usuario'=>$img['name'],
            ':obs_Usuario'=>$obs,
            ':status_Usuario'=>$status
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Cadastrados com sucesso</p>';
            echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';

            $pasta = 'imagem/'.$conn->lastInsertId().'/';

            if(!file_exists($pasta))
            {
                mkdir($pasta);
            }

            $foto = $pasta.$img['name'];

            move_uploaded_file($img['tmp_name'], $foto);

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
<a href="_sistema.php?tela=usuario">Voltar</a>