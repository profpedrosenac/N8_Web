<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <?php include_once('usuario_pesquisar.php') ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Tela de gerenciamento de usuários</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control" onsubmit="return false;" id="frmUsuario">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="txtID" id="txtID" placeholder="ID do Usuário" value="<?=$idUsuario?>">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btoPesquisar" id="btoPesquisar" formaction="frm_usuario.php" onclick="Pesquisar()">&#128269;</button>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro" value="<?=substr($cadastroUsuario,0,10)?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do usuário" value="<?=$nomeUsuario?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do Usuário" value="<?=$loginUsuario?>">
                </div>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Senha do Usuário" value="<?=$senhaUsuario?>">
                </div>
                <div class="col-sm-4">
    <input type="text" class="form-control" name="txtNascimento" id="txtNascimento" placeholder="Data Nascimento Usuário" value="<?=substr($nascimentoUsuario,0,10)?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="txtImg" id="txtImg" placeholder="Imagem do Usuário">
                </div>
                <div class="col-sm-4">
                    <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">-- Selecione um Status --</option>
                        <option value="Ativo" <?=($statusUsuario=='Ativo'?'selected':"") ?>>Ativo</option>
                        <option value="Inativo" <?=($statusUsuario=='Inativo'?'selected':"") ?>>Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" rows="5" class="form-control" placeholder="Observação do Usuário"><?=$obsUsuario?></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-success" formaction="usuario_cadastrar.php" onclick="Cadastrar()">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-secondary" formaction="usuario_alterar.php">Alterar</button>
                    <a href="frm_usuario.php" name="btoLimpar" id="btoLimpar" class="btn btn-warning">Limpar</a>
                    <button name="btoExcluir" id="btoExcluir" class="btn btn-danger" formaction="usuario_excluir.php">Excluir</button>
                    <button name="btoSair" id="btoSair" class="btn btn-dark">Sair</button>
                </div>
            </div>
        </form>
        
    </div>

    <script src="../js/bootstrap.js"></script>
    <script>

        function Pesquisar(){
            if (document.getElementById('txtID').value == '')
            {
                alert('Preencha o ID');
                return false;
            }

            let form = document.getElementById('frmUsuario');
            form.action = 'frm_usuario.php';
            form.method = 'POST';
            form.submit();
        }

        function Cadastrar(){
            let form = document.getElementById('frmUsuario');
            form.action = 'usuario_cadastrar.php';
            form.method = 'POST';
            form.submit();
        }


       
    </script>
</body>
</html>