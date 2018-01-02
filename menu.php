<?php

session_start();
if (isset($_SESSION['nome_sessao'])) {
	# code...
	echo "ola ".$_SESSION['nome_sessao'];
}

?>


<div>
    <br><br>
	Menu<br>

	</div>
	<p><a href="conteudo.php"><Conteudo restrito/a></p>

	<p><a href="cadastro.php">Cadastro de usuários</a></p>
	<p><a href="login.php">Login</a></p>
	<p><a href="logout.php">Logout</a></p>