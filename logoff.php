<?php

// session_start();

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

// // remover indices do array de sessão
// unset($_SESSION['x']);
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

// session_destroy();

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

session_destroy();
header('Location: index.php');


// destruir a variavel de sessão
?>