<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 30/12/17
 * Time: 23:33
 */

if (isset($_SESSION['nome_sessao'])) {
	# code...
	echo "Area restrita";

}else{

	echo "esta e uma area restrita";
}

?>

<br>
<a href="login.php">Faça login</a>