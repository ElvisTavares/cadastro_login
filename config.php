<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 30/12/17
 * Time: 22:52
 */

#Conexão com o BD

$conexao = mysqli_connect('localhost', 'root', '1990') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'test') or die("Erro ao selecionar o Banco de dados");

?>
