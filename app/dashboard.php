<?php
	session_start();
	include("../load/load.php");
	echo "<b><font color='#FFFFFF'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
if(!empty($_SESSION['usuarioNiveisAcessoId'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: /acesso_negado.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Painel de usuario</title>
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
<a class="btn btn-primary" href="sair.php" role="button">Sair</a>
 <body>
 
<div id="container">
<!-- botoes -->
<h1> <b>VERIFICAR ESTOQUE</b> </h1>
<?php

//Liberar botão para acessar estoque
if($_SESSION['usuarioNiveisAcessoId'] == "1" OR $_SESSION['usuarioNiveisAcessoId'] == "2" OR $_SESSION['usuarioNiveisAcessoId'] == "3"){
echo '<br><center><a class="btn btn-primary" href="estoque_app/estoque.php" role="button">ESTOQUE</a><br></center>';
}

//Liberar botão para cadastrar novos usuários
if($_SESSION['usuarioNiveisAcessoId'] == "2" OR $_SESSION['usuarioNiveisAcessoId'] == "3"){
echo '<br><center><a class="btn btn-primary" href="cadastro_usuario.php" role="button">ALTERAR SENHA</a><br></center>';
}
?>
</div>
  </body>
  
  
  
  
  <!-- CSS -->
   <style>
 
   
   
body {
  background-image: url('../imagens/dashbg.jpg');
  background-color: #3FB3B3;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
#container {
	background-color: #FFFFFF;
	opacity: 0.95;
	width: 1200px;
	margin-left: auto;
	margin-right: auto;
	padding: 100px 30px;
	margin-top: 15vh;
	border-radius: 10px;
	text-align: center;
    -webkit-box-shadow: 12px 12px 4px 0px rgba(64, 69, 57, 0.75);
    -moz-box-shadow:    12px 12px 4px 0px rgba(64, 69, 57, 0.75);
    box-shadow:         12px 12px 4px 0px rgba(64, 69, 57, 0.75);

}
h1 {
	color: #A41053;
	font-family: Impact;
	text-align: center;
	text-shadow: 0 0 0.2em #87F, 0 0 0.2em #87F,0 0 0.2em #87F
}

h1:hover {
	color: #000000;
}

</style>
  
  
  
  
</html>
