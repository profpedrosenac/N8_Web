<?php
$idUsuarioLogin = '';
$nomeUsuarioLogin = '';
$loginUsuarioLogin = '';
$imgUsuarioLogin = '';

session_start();

if($_SESSION)
{
    if(isset($_SESSION['idUsuario']) && isset($_SESSION['nomeUsuario']) && isset($_SESSION['loginUsuario']) && isset($_SESSION['imgUsuario']))
    {
        $idUsuarioLogin = $_SESSION['idUsuario'];
        $nomeUsuarioLogin = $_SESSION['nomeUsuario'];
        $loginUsuarioLogin = $_SESSION['loginUsuario'];
        $imgUsuarioLogin = $_SESSION['imgUsuario'];
    }
    else
    {
        header('Location:login.php');
    }
}
else
{
    header('Location:login.php');
}

?>