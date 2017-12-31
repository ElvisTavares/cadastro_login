<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 30/12/17
 * Time: 22:51
 */

include('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$in = mysqli_query($conexao, "INSERT INTO tb_usuario (nome, email,senha) VALUES ('$nome, $email, $senha')") or die("Erro");

?>