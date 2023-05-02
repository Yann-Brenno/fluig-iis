<?php
session_start();
include_once("../conexao.php");

$id = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'login_usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha_usuario', FILTER_SANITIZE_STRING);
$senha = md5($senha);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuarios SET login_usuario='$nome', senha_usuario='$senha' WHERE id_usuario='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: cadastro_usuario.php?id=$id");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: cadastro_usuario.php?id=$id");
}
