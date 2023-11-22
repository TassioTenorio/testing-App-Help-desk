<?php
	session_start();

// variavel que verfica se a autenticação foi realizada
$usuarios_autenticado = false;

// usuarios do sistemas
$usuarios_app = array(
	array('email' => 'tassio_abencoado@gmail.com', 'senha' => 'operacao'),
	array('email' => 'user@teste.com.br', 'senha' => 'abcdefg'),

);
	// echo '<pre>';
	// print_r($usuarios_app);
	// echo '</pre>';

	foreach($usuarios_app as $user){
		//  echo 'Usuário app: ' .$user['email'] . ' / ' . $user['senha'];
		//  echo '<br/>';
		//  echo 'Usuario form: ' . $_POST['email'] . ' / ' . $_POST['senha'];
		//  echo'<hr>';
	}
	if ($user['email'] == $_POST['email'] && $user['senha'] ==  $_POST['senha']){
		$usuarios_autenticado = true;
		
	}

if ($usuarios_autenticado){
	echo 'Usuário autenticado';
	$_SESSION['autenticado'] = 'SIM';
	$_SESSION['x'] = 'um valor';
	$_SESSION['y'] = 'outro valor';
	header('Location: home.php');

}else{
	$_SESSION['autenticado'] = 'NAO';
	header('Location: index.php?login=erro');
};
?>