<?php
session_start();
include_once("../conexao.php");
	echo "<b><font color='#F94609'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
if(!empty($_SESSION['usuarioNiveisAcessoId'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: /acesso_negado.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Editar</title>	
		<br> <a href="sair.php">Sair</a><br>
		<center><a href="dashboard.php">Voltar</a></cener>
		  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Yann">
    <link rel="icon" href="imagens/favicon.ico">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>
	</head>
	<body>
	<div id="container">
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cadastro_usuario.php">
			<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuarioId']; ?>">
			
			
			<input type="hidden" name="login_usuario" placeholder="Digite o nome completo" value="<?php echo $_SESSION['usuarioNome']; ?>"><br><br>
			
			<label>NOVA SENHA: </label>
			<input id="input" type="password" name="senha_usuario" placeholder="Digite a nova senha" value=""><br><br>
			
			<input id="botao" type="submit" value="Editar">
		</form>
		</div>
	</body>
	
</html>


<script>
//desabilita o botão no início
document.getElementById("botao").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("input").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("input").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("botao").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("botao").disabled = true;
    }
});
</script>


<style>
 body{
   background-image: url('../imagens/resetbg.jpg');
 }
 
 
 #container {
	background-color: #27C866;
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