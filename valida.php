<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 30/12/17
 * Time: 23:00
 */

include('config.php');

$sql = mysqli_query($conexao, "SELECT * FROM tb_usuario WHERE email='".$_POST['email']."' AND senha='".$_POST['senha']."' LIMIT 1") or die("Erro");

$linhas = mysqli_num_rows($sql);

if ($linhas == ''){
    echo "Usuário não encontrado ou usuário e senha inválidos.";
}else{
    while($dados=mysqli_fetch_assoc($sql)){
        session_start();
        $_SESSION['nome_sessao'] = $dados['nome'];
        header("Location: conteudo.php");


    }
}